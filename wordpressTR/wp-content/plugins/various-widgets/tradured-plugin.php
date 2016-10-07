<?php
/*
Plugin Name: Tradured Widget Plugin
Description: Creates and Displays diferents widgets
Author: CETAV
Version: 1
*/
// Event Section Widget
class EventsSectionWidget extends WP_Widget
{
  function EventsSectionWidget()
  {
    $widget_ops = array('classname' => 'EventsSectionWidget', 'description' => 'Displays the Events Section' );
    $this->WP_Widget('EventsSectionWidget', 'Events Section Widget', $widget_ops);
  }

  function widget()
  {
    // WIDGET CODE GOES HERE
    include 'frontpage/events-section-widget.php';
  }
}
add_action( 'widgets_init', create_function('', 'return register_widget("EventsSectionWidget");') );
// No Event Section Widget
class noEvents extends WP_Widget
{
  function noEvents()
  {
    $widget_ops = array('classname' => 'noEvents', 'description' => 'There are no events' );
    $this->WP_Widget('noEvents', 'No Events Widget', $widget_ops);
  }
  function widget()
  {
    // WIDGET CODE GOES HERE
    include 'frontpage/no-events-section-widget.php';
  }
}
add_action( 'widgets_init', create_function('', 'return register_widget("noEvents");') );

