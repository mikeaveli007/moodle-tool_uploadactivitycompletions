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
 * Links and settings
 *
 * This file contains links and settings used by tool_uploadactivitycompletions
 *
 * @package   tool_uploadactivitycompletions
 * @copyright 2020 Tim St.Clair (https://github.com/frumbert/)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die;

// This tool's required capabilities.
$capabilities = [
    'moodle/course:overridecompletion'
];

// Check if the user has all of the required capabilities.
$context = context_system::instance();
$hasaccess = has_all_capabilities($capabilities, $context);

if ($hasaccess) {
    $ADMIN->add('courses', new admin_externalpage(
	    'tooluploadactivitycompletions',
	    get_string('pluginname', 'tool_uploadactivitycompletions'),
	    new moodle_url('/admin/tool/uploadactivitycompletions/index.php'),
		$capabilities
		)
    );
}
