<?php
$mysqli = mysqli_connect("localhost", "root", "", "pw2");

// check conection
if ($mysqli === false) {
    die("error: could not connect." . $mysqli_connect_error());
}


?>