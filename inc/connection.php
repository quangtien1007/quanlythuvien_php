<?php
$link = mysqli_connect("localhost", "root", "", "lms");
if (!$link) {
   die('Could not connect: ' . mysqli_error());
}
