<?php
function wp_get_current_url() {
    var_dump($_SERVER);
    return home_url( $_SERVER['REQUEST_URI'] );
}