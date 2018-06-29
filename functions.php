<?php

// Disable comments js
function clean_header(){
  wp_deregister_script( 'comment-reply' );
}
add_action('init','clean_header');

foreach (glob( get_template_directory() . "/functions/*.php") as $filename) {
  include $filename;
}

?>
