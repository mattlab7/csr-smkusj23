<?php
    function dbInit() {
        // Database configuration
        $dbHost = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName = 'sitedb';

        // Connect to the database
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }

        return $db;
    }
?>