<?php

/*
Plugin Name: BP Profile Text Widget
Plugin URI: http://slushman.com/plugins/bp-profile-text-widget
Description: Adds a text wudget to a member's profile sidebar that is customized for each user.
Version: 0.2
Author: Slushman
Author URI: http://slushman.com
License: GPLv2

**************************************************************************

  Copyright (C) 2012 Slushman

  This program is free software: you can redistribute it and/or modify
  it under the terms of the GNU General License as published by
  the Free Software Foundation, either version 3 of the License, or
  (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General License for more details.

  You should have received a copy of the GNU General License
  along with this program.  If not, see <http://www.gnu.org/licenses/>.

**************************************************************************

*/

/* Only load code that needs BuddyPress to run once BP is loaded and initialized. */
function bpprofiletext_widget_init() {

    require( dirname( __FILE__ ) . '/bp-profile-text-widget.php' );
    
}

add_action( 'bp_include', 'bpprofiletext_widget_init' );

/* If you have code that does not need BuddyPress to run, then add it here. */

?>