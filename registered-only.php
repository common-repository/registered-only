<?php
/*
Plugin Name: Registered Only
Plugin URI: http://dev.wp-plugins.org/browser/registered-only/
Description: Activate this plugin to restrict access to your entire weblog to logged in, registered users of the weblog. Disable the WordPress option to allow anyone to register to better control access. 
Version: 2005-05-12-2000
Author: Carthik Sharma
Author URI: http://blog.carthik.net
*/
/*  Copyright 2005 Carthik A. Sharma (email : mail at carthik dot net)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

function carthik_bouncer() {
    if (substr($_SERVER['SCRIPT_NAME'], -12) != "wp-login.php") {
        auth_redirect();
    } 
}

add_action('init', 'carthik_bouncer');
?>
