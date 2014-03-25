<?php

require_once(dirname(__FILE__) . '/../../config.php');
require_once($CFG->dirroot . '/mod/oublog/locallib.php');
require_once($CFG->dirroot . '/grade/grading/lib.php');

$id  = optional_param('id', 0, PARAM_INT);

$cm = get_coursemodule_from_id('oublog', $id, 0, false, MUST_EXIST);
$course = $DB->get_record('course', array('id' => $cm->course), '*', MUST_EXIST);
$oublog = $DB->get_record('oublog', array('id' => $cm->instance), '*', MUST_EXIST);

$context = context_module::instance($cm->id);
require_course_login($course, true, $cm);

$url = new moodle_url('/mod/oublog/viewadvancedgrade.php');
$url->param('id', $id);
$PAGE->set_url($url);

$PAGE->set_title(format_string($oublog->name));
$PAGE->set_heading(format_string($oublog->name));

echo $OUTPUT->header();
echo $OUTPUT->heading(get_string('mygrade', 'oublog'));

$controller = get_grading_manager($context, 'mod_oublog', 'participation')->get_active_controller();

if ($oublog->grade and $controller) {

    $controller->set_grade_range(make_grades_menu($oublog->grade), $oublog->grade > 0);
    $cangrade = oublog_can_grade($course, $oublog, $cm);
    $gradinginfo = grade_get_grades($course->id, 'mod', 'oublog', $oublog->id, array($USER->id));
    $gradingitem = null;
    $gradebookgrade = null;
    if (isset($gradinginfo->items[0])) {
        $gradingitem = $gradinginfo->items[0];
        $gradebookgrade = $gradingitem->grades[$USER->id];
    }

    $strgrade = get_string('grade') . ': ' . $gradebookgrade->str_long_grade;
    if (!empty($gradebookgrade->grade) && ($cangrade || !$gradebookgrade->hidden)) {
        echo $controller->render_grade($PAGE, $USER->id, $gradinginfo, $strgrade, $cangrade);
    } else {
        echo $controller->render_preview($PAGE);
        echo get_string('nograde');
    }
}

echo $OUTPUT->footer();
