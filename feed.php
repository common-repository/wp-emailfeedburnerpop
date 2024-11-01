<?php
/*
      Plugin Name: WP_EmailFeedburnerPop
      Plugin URI: http://puydi.net/blog/wp_emailfeedburnerpop-popup-plugin-para-wordpress/
      Description: Popup para tus feeds con lo cual podras añadir nuevos lectores de una forma facil y rapida.
      Version: 1.2
      Author: Andres Felipe Perea V
      Author URI: http://puydi.net/
*/

/*
Copyright 2009  PUYDI, IN  (http://www.puydi.net/)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details: http://www.gnu.org/licenses/gpl.txt
*/
   
function textpoppuy(){
include ('puydi.html');
}
function PopupPUYDI(){
include ('pop.php');
}

/* Añadir comando wordpress */
add_action('wp_head','PopupPUYDI');
add_action('wp_footer','textpoppuy');

?>
