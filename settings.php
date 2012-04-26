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
 * Database enrolment plugin settings and presets.
 *
 * @package    enrol
 * @subpackage attributes
 * @copyright  2012 Nicolas Dunand {@link http://www.unil.ch/riset}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {
    
    $options = get_default_enrol_roles(get_context_instance(CONTEXT_SYSTEM));
    $student = get_archetype_roles('student');
    $student = reset($student);
    $settings->add(new admin_setting_configselect('enrol_attributes/roleid', get_string('defaultrole', 'enrol_attributes'), get_string('defaultrole_desc', 'enrol_attributes'), $student->id, $options));

}
