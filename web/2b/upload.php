<?php
echo "<!DOCTYPE html><html><head><title>Exempel 2b upload</title></head><body>"; 

if(!empty($_FILES['uploaded_file']['tmp_name'])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES['uploaded_file']['name']);
    if($_FILES['uploaded_file']['size'] > 700000) {
        /*Assuming 700kB limit is what was intended, brief actually specified 700kb*/
        echo "The file is too large!";
    } else {
        /*Determine imagetype, if suffix is missing add it*/
        $type_of_file = exif_imagetype($_FILES['uploaded_file']['tmp_name']);
        if (($type_of_file == IMAGETYPE_JPEG) || ($type_of_file == IMAGETYPE_PNG)) {
            /*Fix filename suffix*/
            switch ($type_of_file) {
                case IMAGETYPE_JPEG:
                    if (pathinfo($target_file, PATHINFO_EXTENSION) != "jpg") {
                        $target_file = $target_dir . pathinfo($target_file, 
                                       PATHINFO_FILENAME) . ".jpg";
                    }
                    break;
                case IMAGETYPE_PNG:
                    if (pathinfo($target_file, PATHINFO_EXTENSION) != "png") {
                        $target_file = $target_dir . pathinfo($target_file, 
                                       PATHINFO_FILENAME) . ".png";
                    }
                    break;
            }

            if (!file_exists($target_dir)) {
                //echo getcwd();
                mkdir($target_dir, 0777, true);
            }

            if (file_exists($target_file)) {
                $i = 1;
                do {
                    $tmp_name = pathinfo($target_file, PATHINFO_FILENAME) . "[$i]" .
                                "." . pathinfo($target_file, PATHINFO_EXTENSION);
                    $i++;
                } while (file_exists($target_dir . $tmp_name));
                $target_file = $target_dir . $tmp_name;
            }

            if (move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $target_file)) {
                echo "Thank you! The upload is OK<br>";
                echo "Your image <a href=\"$target_file\">here</a>";
            } else {
                echo "Error saving file";
            }
        } else {
            echo "The file is not a JPEG or PNG!";
        }
    }
} else {
    echo "You did not upload a file";
}
echo "</body></html>";
