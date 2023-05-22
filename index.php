<?php

    // enable session in /
    session_start();

    // your website path
    // parse_url will remove all the query string starting from the ?
    $path = parse_url( $_SERVER["REQUEST_URI"], PHP_URL_PATH );
    // remove / using trim()
    $path = trim( $path, '/' );

    if ( $path == 'process' ) {
        // load login.php
        require "processform.php";
    } else {
        // load home.php
        require "contact.php";
    }