<?php
/*
Plugin Name: arzamath_17th
Description: Plugin for homework 4
Version: 0.1.0
Author: Evgeniy Lagutin
Author URI: http://vk.com/e_kalashnikoff
License: GPLv2 or later
Text Domain: arzamath_17th
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

//register_activation_hook(__FILE__, array('arzamath_17th', 'plugin_activation'));
//register_deactivation_hook(__FILE__, array('arzamath_17th', 'plugin_deactivation'));

require_once(dirname(__FILE__). '/arzamath_17.class.php');
new Arzamath_17th();

