<?php
/*$target_dir = "/";
$target_file = $target_dir . basename($_FILES['uploaded_file']['name']);
*/


if(isset($_POST['submit'])) {
    if($_FILES['uploaded_file']['size'] > 700000) {
        echo "Error, file is too large";
    } else {
        $type_of_file = exif_imagetype($_FILES['uploaded_file']['tmp_name']);
        if (($type_of_file == IMAGETYPE_JPEG) || ($type_of_file == IMAGETYPE_PNG)) {
            echo "Upload OK";
        } else {
            echo "Upload not OK";
        }
    }
}
