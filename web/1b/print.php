<!DOCTYPE html>
<html>
<head>
<title>Exempel 1b resultat</title>
</head>
<body>
<?php
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
    $name = clean_data($name);
    echo "Namn: " . $name . "<br>";
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Ogiltig epost-adress!<br>";
    } else {
        echo "Epost: " . $email . "<br>";
    }

    if (!preg_match("/^[0-9\+][0-9]*$/", $phone)) {
        echo "Ogiltigt telefonnummer!";
    } else {
        echo "Telefon: " . $phone . "<br>";
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
