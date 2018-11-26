<?php

/* This php page is to connect to the database */

$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'birds');

?>