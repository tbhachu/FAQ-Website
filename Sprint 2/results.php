<!--
 Daily Debuggers
 Sprint 2
 PHP file for displaying header, user input as keywords, and footer
 -->


<?php

$page = "Keywords:";
include('header.html');

ini_set('display_errors', 1);
error_reporting(E_ALL);

$input = $_POST['input'];

echo "<h2>Your keywords: $input</h2>";

?>

<?php
$page = "Keywords:";
include('footer.html');

?>
