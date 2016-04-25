<?php

require_once($CFG->libdir . '/formslib.php');

class mod_oublog_advancedgrade_form extends moodleform {

    private $oublog;
    private $controller;
    private $userid;

    public function definition() {
        global $CFG;

        $mform = $this->_form;

        list($this->oublog, $this->user) = $this->_customdata;

        $gradingdisabled = $this->grading_disabled();
        $gradinginstance = $this->get_grade_instance($gradingdisabled);

        $mform->addElement('header', 'gradeheader', get_string('grade'));
        $url = new moodle_url('/user/view.php');
        $url->params(array('id' => $this->user->id, 'course' => $this->oublog->course));

        $gradingelement = $mform->addElement(
            'grading', 'grade', get_string('grade').':',
            array('gradinginstance' => $gradinginstance));

        if ($gradingdisabled) {
            $gradingelement->freeze();
        } else {
            $mform->addElement('hidden', 'instanceid', $gradinginstance->get_id());
            $mform->setType('instanceid', PARAM_INT);
        }

        $this->add_action_buttons();
    }

    public function submit_grade() {
        $gradingdisabled = $this->grading_disabled();
        $gradinginstance = $this->get_grade_instance($gradingdisabled);
        if (!$gradingdisabled and $gradinginstance) {
            $formdata = $this->get_data();
            return $gradinginstance->submit_and_get_grade($formdata->grade, $this->user->id);
        }
        return null;
    }

    private function get_grade_instance($gradingdisabled) {
        global $PAGE;

        $gradinginstance = null;

        $grademenu = make_grades_menu($this->oublog->grade);
        $allowgradedecimals = $this->oublog->grade > 0;

        $controller = get_grading_manager($PAGE->context, 'mod_oublog', 'participation')->get_active_controller();

        if ($controller) {
            $controller->set_grade_range(make_grades_menu($this->oublog->grade), $this->oublog->grade > 0);
            if ($gradingdisabled) {
                $gradinginstance = $controller->get_current_instance(0, $this->user->id);
            } else {
                $instanceid = optional_param('instanceid', 0, PARAM_INT);
                $gradinginstance = $controller->get_or_create_instance($instanceid, 0, $this->user->id);
            }
        }

        if ($gradinginstance) {
            $gradinginstance->get_controller()->set_grade_range($grademenu, $allowgradedecimals);
        }

        return $gradinginstance;
    }

    private function grading_disabled() {
        global $CFG, $PAGE;

        $gradinginfo = grade_get_grades(
            $this->oublog->course, 'mod', 'oublog', $this->oublog->id, $this->user->id);

        if (!$gradinginfo or !isset($gradinginfo->items[0]->grades[$this->user->id])) {
            return false;
        }

        return ($gradinginfo->items[0]->grades[$this->user->id]->locked ||
                $gradinginfo->items[0]->grades[$this->user->id]->overridden);
    }
}
