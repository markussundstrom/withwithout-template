<?php
/*$target_dir = "/";
$target_file = $target_dir . basename($_FILES['uploaded_file']['name']);
*/


if(isset($_POST['submit'])) {
    if($_FILES['uploaded_file']['size'] > 700000) {
        echo "The file is too large!";
    } else {
        $type_of_file = exif_imagetype($_FILES['uploaded_file']['tmp_name']);
        if (($type_of_file == IMAGETYPE_JPEG) || ($type_of_file == IMAGETYPE_PNG)) {
            echo "Thank you! The upload is OK";
        } else {
            echo "The file is not a JPEG or PNG!";
        }
    }
}
