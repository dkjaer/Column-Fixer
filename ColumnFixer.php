<?php
/*
Plugin Name: Column Fixer
*/

add_action('admin_head', 'column_fixer_admin_head');

function hidey_admin_head() {
    echo '<style type="text/css">';
    echo '.column-date { display: none }';
    echo '.column-tags { display: none }';
    echo '.column-author { width:30px !important; overflow:hidden }';
    echo '.column-categories { width:30px !important; overflow:hidden }';
    echo '.column-title { width:120px !important; overflow:hidden }';
    echo '.column-title a { font-size:14px !important }';
    echo '</style>';
}
?>