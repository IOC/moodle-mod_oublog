<?php

require_once("../../config.php");
require_once("locallib.php");

$postid = required_param('post', PARAM_INT);
$rating = required_param('rating', PARAM_INT);
$returnurl = required_param('returnurl', PARAM_LOCALURL);

if (!$oublog = oublog_get_blog_from_postid($postid)) {
    print_error('invalidpost', 'oublog');
}

if (!$cm = get_coursemodule_from_instance('oublog', $oublog->id)) {
    print_error('invalidcoursemodule');
}

$context = context_module::instance($cm->id);

oublog_check_view_permissions($oublog, $context, $cm);

if (!$post = oublog_get_post($postid)) {
    print_error('invalidpost', 'oublog');
}

if (!oublog_can_view_post($post, $USER, $context, $oublog)) {
    print_error('accessdenied', 'oublog');
}

if (!isloggedin() or isguestuser() or !confirm_sesskey()) {
    print_error('invalidsesskey');
}

if (!$post->deletedby and $post->userid != $USER->id) {
    $params = array('postid' => $post->id, 'userid' => $USER->id);
    if (!$DB->record_exists('oublog_ratings', $params)) {
        $record = new stdClass;
        $record->postid = $post->id;
        $record->userid = $USER->id;
        $record->rating = max(1, min(5, $rating));
        $DB->insert_record('oublog_ratings', $record);
    }
}

redirect($returnurl);
