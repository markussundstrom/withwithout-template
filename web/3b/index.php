<!DOCTYPE html>
<html>
<head>
<title>Exempel 3B</title>
</head>

<?php
if (!empty($_GET['color'])) {
    if (preg_match_all('/^([a-fA-F0-9]{3}){1,2}$/', $_GET['color'])) {
        echo '<body style="background-color:#' . $_GET['color'] . ';">';
        echo '<h1>COLOR!</h1><br>';
    } else {
        echo "<body><h1>Invalid color</h1>";
    }
} else {
    echo 'Please supply a hexadecimal color value in url with color=VALUE';
}
?>
</body>
</html>

 
