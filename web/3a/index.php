<!DOCTYPE html>
<html>
<head>
<title>Exempel 3A</title>
</head>
<body>

<?php
if (!empty($_GET)) {
    echo '<h1>These are the variables you supplied:</h1><br>';
    echo '<table><tr><th>Key</th><th>Value</th></tr>';
    foreach ($_GET as $key => $value) {
        echo "<tr><td>$key</td><td>$value</td></tr>";
    }
    echo '<//table>';
} else {
    echo 'You didn\'t supply any data';
}
?>
</body>
</html>

 
