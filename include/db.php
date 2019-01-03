<?php

$connection = mysqli_connect("localhost","root","","cms");
if($connection) {
    echo "Connection done";
} else {
    echo "sorry!";
}
?>