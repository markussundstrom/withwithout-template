<!DOCTYPE html>
<html>
<head>
<title>Exempel 3c</title>
</head>
<body>

<?php
$output = array("Lorem", "ipsum", "dolor", "sit", "amet", "consectetur", 
                "adipiscing", "elitx", "sed", "do", "eiusmod", "tempor",
                "incididunt", "ut", "labore", "et", "dolore", "magna", "aliquax",
                "Ut", "enim", "ad", "minim", "veniam", "quis", "nostrud", 
                "exercitation", "ullamco", "laboris", "nisi", "ut", "aliquip",
                "ex", "ea", "commodo", "consequat", "Duis");


if (!empty($_GET['page'])) {
    $pagesize = 2;
    $loc = $_GET['page'] -1 * $pagesize;
    for ($i = 0; $i < $pagesize; $i++) {
        echo $output[$loc + $i] . "<br>";
    }
    echo '<//table>';
} else {
    echo 'You didn\'t supply any data';
}
?>
</body>
</html>

 
