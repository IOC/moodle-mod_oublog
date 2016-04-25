<?php

require_once(dirname(__FILE__) . '/../../config.php');
require_once($CFG->dirroot . '/mod/oublog/locallib.php');
require_once($CFG->dirroot . '/grade/grading/lib.php');
require_once(dirname(__FILE__) . '/advancedgradeform.php');
require_once('HTML/QuickForm/input.php');

$id = required_param('id', PARAM_INT);
$userid = required_param('user', PARAM_INT);
$groupid = optional_param('group', 0, PARAM_INT);

$cm = get_coursemodule_from_id('oublog', $id, 0, false, MUST_EXIST);
$course = $DB->get_record('course', array('id' => $cm->course), '*', MUST_EXIST);
$oublog = $DB->get_record('oublog', array('id' => $cm->instance), '*', MUST_EXIST);
$user = $DB->get_record('user', array('id' => $userid), '*', MUST_EXIST);

$context = context_module::instance($cm->id);
require_course_login($course, true, $cm);

// participation capability check
$canview = oublog_can_view_participation($course, $oublog, $cm, $groupid);
if ($canview != OUBLOG_USER_PARTICIPATION) {
    print_error('nopermissiontoshow');
}

// grading capability check
if (!oublog_can_grade($course, $oublog, $cm, $groupid)) {
    print_error('nopermissiontoshow');
}

$url = new moodle_url('/mod/oublog/editadvancedgrade.php');
$url->params(array('id' => $id, 'user' => $userid, 'group' => $groupid));
$PAGE->set_url($url);

$customdata = array($oublog, $user);
$form = new mod_oublog_advancedgrade_form($url, $customdata);

$participationurl = new moodle_url('/mod/oublog/participation.php');
$participationurl->params(array('id' => $id, 'group' => $groupid));

if ($form->get_data()) {

    $grade = $form->submit_grade();

    $participation = oublog_get_user_participation($oublog, $context, $userid, $groupid, $cm, $course);
    $newgrades = array($userid => $grade);
    $oldgrades = array($userid => $participation);
    oublog_update_grades($newgrades, $oldgrades, $cm, $oublog, $course);

    redirect($participationurl);

} elseif ($form->is_cancelled()) {

    redirect($participationurl);

} else {
    $PAGE->navbar->add(get_string('userparticipation', 'oublog'), $participationurl);
    $PAGE->navbar->add(fullname($user));
    $PAGE->set_title(format_string($oublog->name));
    $PAGE->set_heading(format_string($oublog->name));
    echo $OUTPUT->header();
    echo $OUTPUT->heading(s(fullname($user)));
    $form->display();
    echo $OUTPUT->footer();
}
