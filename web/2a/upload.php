<?php
if(isset($_POST['submit'])) {
    if($_FILES['uploaded_file']['size'] > 700000) {
        /*Assuming 700kB limit was intended, brief actually specified 700kb*/
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
