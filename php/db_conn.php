<?php
$dbhost = "localhost";
$dbuser = "projekt";
$dbpasswd = "IOG";
$dbname = "beet_datenbank";
$mysqli = new mysqli($dbhost, $dbuser, $dbpasswd, $dbname);



if ($mysqli->connect_errno) {
    // Ausgabe im Fehlerfall sollte verbessert werden :-(
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}