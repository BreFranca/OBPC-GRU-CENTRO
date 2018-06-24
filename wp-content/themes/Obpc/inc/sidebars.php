<?php
/**************************************
 * REGISTRO DE SIDEBAR
 **************************************/
if ( function_exists('register_sidebar') )
{
  register_sidebar(array(
    'name'          => 'Sidebar Lateral',
    'id'            => 'sidebar-lateral',
    'description'   => 'Sidebar Lateral',
    'class'         => '',
    'before_title'  => '<span>',
    'after_title'   => '</span>'
  ) );
}