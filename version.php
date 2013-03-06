<?php
//  My mail block for Moodle
//  Copyright © 2013  Institut Obert de Catalunya
//
//  This program is free software: you can redistribute it and/or modify
//  it under the terms of the GNU General Public License as published by
//  the Free Software Foundation, either version 3 of the License, or
//  (at your option) any later version.
//
//  This program is distributed in the hope that it will be useful,
//  but WITHOUT ANY WARRANTY; without even the implied warranty of
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//  GNU General Public License for more details.
//
//  You should have received a copy of the GNU General Public License
//  along with this program.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Version details
 *
 * @package    block
 * @subpackage mymail
 * @copyright  Marc Català <mcatala@ioc.cat>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version      = 2013022800;        // The current plugin version (Date: YYYYMMDDXX)
$plugin->requires     = 2011112900;        // Requires this Moodle version
$plugin->component    = 'block_mymail';    // Full name of the plugin (used for diagnostics)

$plugin->dependencies = array(
    'local_mail' => ANY_VERSION
);
