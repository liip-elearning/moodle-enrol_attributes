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
 * @package    enrol_attributes
 * @author     Nicolas Dunand <Nicolas.Dunand@unil.ch>
 * @copyright  2012-2015 Université de Lausanne (@link http://www.unil.ch}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Enrol by user profile fields';
$string['defaultrole'] = 'Default role';
$string['defaultrole_desc'] = 'Default role used to enrol people with this plugin (each instance can override this).';
$string['attrsyntax'] = 'User profile fields rules';
$string['attrsyntax_help'] = '<p>These rules can only use custom user profile fields.</p>';
$string['attributes:config'] = 'Configure plugin instances';
$string['attributes:manage'] = 'Manage enrolled users';
$string['attributes:unenrol'] = 'Unenrol users from the course';
$string['attributes:unenrolself'] = 'Unenrol self from the course';
$string['ajax-error'] = 'An error occured';
$string['ajax-okpurged'] = 'OK, enrolments have been purged';
$string['ajax-okforced'] = 'OK, {$a} users have benn enrolled';
$string['purge'] = 'Purge inscriptions';
$string['force'] = 'Force inscriptions';
$string['confirmforce'] = 'This will (re)enrol all users corresponding to this rule.';
$string['confirmpurge'] = 'This will remove all enrolments corresponding to this rule.';
$string['mappings'] = 'Mappings';
$string['mappings_desc'] = 'List of values (one per line), <br>in the form: <code>server environment variable : extended user profile field shortname</code>, p.ex. : <br /><code>Shib-SwissEP-HomeOrganizationType:homeorganizationtype</code>';
$string['removewhenexpired'] = 'Unenrol after attributes expiration';
$string['removewhenexpired_help'] = 'Unenrol users upon login if they don\'t match the attribute rule anymore.';
