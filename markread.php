<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

require_once("../../config.php");
require_once("locallib.php");

$postid = required_param('post', PARAM_INT);
$status = required_param('status', PARAM_INT);
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

if (!oublog_can_view_post($post, $USER, $context, $cm, $oublog)) {
    print_error('accessdenied', 'oublog');
}

if (!isloggedin() or isguestuser() or !confirm_sesskey()) {
    print_error('invalidsesskey');
}

if ($oublog->readtracking) {
    oublog_mark_read($post, $status);
}

redirect($returnurl);
