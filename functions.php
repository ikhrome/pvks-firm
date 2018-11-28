<?php

if(!function_exists('proceed_header')) {
    function proceed_header() {
        global $title;
        include 'partials/header.php';
    }
}

if(!function_exists('proceed_footer')) {
    function proceed_footer() {
        include 'partials/footer.php';
    }
}