<!DOCTYPE html>
<html>
<head>
<title>Exempel 1c resultat</title>
</head>
<body>
<?php
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $info_ok = 1;

    $name = clean_data($name);
    echo "Namn: " . $name . "<br>";
        
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Ogiltig epost-adress!<br>";
        $info_ok = 0;
    } else {
        echo "Epost: " . $email . "<br>";
    }

    if (!preg_match("/^[0-9\+][0-9]*$/", $phone)) {
        echo "Ogiltigt telefonnummer!";
        $info_ok = 0;
    } else {
        echo "Telefon: " . $phone . "<br>";
    }
    if ($info_ok) {
        $line = date("Y-m-d H:i:s") . "\t" . $name . "\t" . $email . "\t" . $phone . "\n";
        $logfile = fopen("logfile.txt", "a") or die ("Unable to open file");
        fwrite($logfile, $line);
        fclose($logfile);
    }
}


function clean_data($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
</body>
</html>
