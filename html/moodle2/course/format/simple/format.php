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

/**
 * Simple Topics course format.  Display the whole course as "Simple blocks" made of modules.
 * This format is based on "topics" format from Moodle 2.4
 *
 * @package format_simple
 * @copyright 2012-2014 UPCnet
 * @author Pau Ferrer Ocaña pau.ferrer-ocana@upcnet.es, Jaume Fernàndez Valiente jfern343@xtec.cat, Marc Espinosa Zamora marc.espinosa.zamora@upcnet.es
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once($CFG->libdir . '/filelib.php');
require_once($CFG->libdir . '/completionlib.php');

// Horrible backwards compatible parameter aliasing..
if ($topic = optional_param('topic', 0, PARAM_INT)) {
    $url = $PAGE->url;
    $url->param('section', $topic);
    debugging('Outdated topic param passed to course/view.php', DEBUG_DEVELOPER);
    redirect($url);
}
// End backwards-compatible aliasing..

$context = context_course::instance($course->id);

if (($marker >= 0) && has_capability('moodle/course:setcurrentsection', $context) && confirm_sesskey()) {
    $course->marker = $marker;
    course_set_marker($course->id, $marker);
}

// make sure all sections are created
$course = course_get_format($course)->get_course();
course_create_sections_if_missing($course, range(0, $course->numsections));

//$is_teacher = has_capability('moodle/course:setcurrentsection', $context);
if ($PAGE->user_is_editing()) {
    $alt_format = 'topics';
    include($CFG->dirroot . '/course/format/' . $alt_format . '/format.php');
    return;
}

require_once($CFG->dirroot . '/course/format/simple/lib.php');

$renderer = $PAGE->get_renderer('format_simple');

$notifyeditingon = optional_param('notifyeditingon', -1, PARAM_BOOL);
if ($course->coursedisplay == COURSE_DISPLAY_MULTIPAGE){
    if ($edit < 0 && $notifyeditingon < 0 && empty($displaysection)) {
        $displaysection = $course->marker;
    } else if ($displaysection == -1){
        $displaysection = 0;
    }
}

$isstudent = !has_capability('moodle/course:update',$context);
$section =  optional_param('section',0,PARAM_INT);

if (($notifyeditingon < 0 && $isstudent) || !empty($section)) {
    //if (empty($displaysection)) $course->showtopiczero = true;
    $displaysection = !empty($displaysection)?$displaysection:1;
    $renderer->print_single_section_page($course, null, null, null, null, $displaysection);
} else {
    $renderer->print_multiple_section_page($course, null, null, null, null);
}
