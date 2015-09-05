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
 * Turnitinstatus block caps.
 *
 * @package   block_turnitinstatus
 * @copyright Trevor Cunningham <trevor.cunningham@uregina.ca>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$settings->add(new admin_setting_heading('sampleheader',
                                         get_string('headerconfig', 'block_turnitinstatus'),
                                         get_string('descconfig', 'block_turnitinstatus')));

$settings->add(new admin_setting_configcheckbox('newblock/foo',
                                                get_string('labelfoo', 'block_turnitinstatus'),
                                                get_string('descfoo', 'block_turnitinstatus'),
                                                '0'));
