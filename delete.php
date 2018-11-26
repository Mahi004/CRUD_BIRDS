<?php

include 'conn.php';

                                                        /*this page will delete the entire row selected with refrence to the id */

$id = $_GET['id'];

$q = "DELETE FROM `birdtable` WHERE id = $id ";

mysqli_query($con,$q);

header("location:display.php");                          /*redirect to display*/

?>