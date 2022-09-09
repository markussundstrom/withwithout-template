<!DOCTYPE html>
<html>
<head>
<title>Exempel 1c sortering</title>
</head>
<body>
<?php
$logfile = fopen("logfile.txt", "r");
$lines = array();
while($nextline = fgets($logfile)) {
    array_push($lines, $nextline);
}
$entries = array();
fclose($logfile);
foreach ($lines as $line) {
    array_push($entries, explode("\t", $line));
}
$sorted_logs = sort_logs($entries);
echo "<table><tr><th>Tid</th><th>Namn</th><th>E-post</th><th>Telefon</th></tr>";
foreach ($sorted_logs as $log) {
    echo "<tr><td>" . $log['0'] . "</td><td>" . $log['1'] . "</td><td>" . 
         $log['2'] . "</td><td>" . $log['3'] . "</td></tr>";
}
echo "</table>";


function sort_logs($entries) {
    $sortable_array = array();
    $ordered_array = array();
    foreach ($entries as $key => $entry) {
        array_push($sortable_array, $entry['1']);
    }
    asort($sortable_array);
    foreach ($sortable_array as $k => $v) {
        $ordered_array[$k] = $entries[$k];
    }
    return $ordered_array;
}
?>
</body>
</html>
