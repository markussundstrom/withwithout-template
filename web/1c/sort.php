<!DOCTYPE html>
<html>
<head>
<title>Exempel 1c sortering</title>
</head>
<body>
<?php
$logfile = fopen("logfile", "r");
$lines = array();
while(!feof($logfile)) {
    array_push($lines, fgets($logfile));
}
$entries = array();
foreach ($lines as $line) {

