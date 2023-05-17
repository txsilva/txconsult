<?php
class Navwalker extends Walker_Nav_Menu {
  public function start_lvl( &$output, $depth = 0, $args = array() ) {
    $output .= "<div class='navbar-dropdown'>";
  }

  public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
    $liClasses = 'navbar-item '.$item->title;
    $hasChildren = $args->walker->has_children;
    $liClasses .= $hasChildren? " has-dropdown is-hoverable": "";
    if($hasChildren){
      $output .= "<div class='".$liClasses."'>";
      $output .= "\n<a class='navbar-link' href='".$item->url."'>".$item->title."</a>";
    } else {
      $output .= "<a class='".$liClasses."' href='".$item->url."'>".$item->title;
    }

    if ( $hasChildren ) {
      $item->classes[] = 'has_children';
    }
  }
  
  public function end_el(&$output, $item, $depth = 0, $args = array(), $id = 0 ){
    if(in_array("has_children", $item->classes)) {
      $output .= "</div>";
    }
    $output .= "</a>";
  }

  public function end_lvl (&$output, $depth = 0, $args = array()) {
      $output .= "</div>";
  }
}
