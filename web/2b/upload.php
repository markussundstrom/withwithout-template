<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES['uploaded_file']['name']);



if(isset($_POST['submit'])) {
    if($_FILES['uploaded_file']['size'] > 700000) {
        /*Assuming 700kB limit is what was intended, brief actually specified 700kb*/
        echo "The file is too large!";
    } else {
        /*Determine imagetype, if suffix is missing add it*/
        $type_of_file = exif_imagetype($_FILES['uploaded_file']['tmp_name']);
        if (($type_of_file == IMAGETYPE_JPEG) || ($type_of_file == IMAGETYPE_PNG)) {
            switch ($type_of_file) {
                case IMAGETYPE_JPEG:
                    if (pathinfo($target_file, PATHINFO_EXTENSION) != jpg) {
                        $target_file .= ".jpg";
                        /*FIXME JPEGS may end in .jpeg, this would make them end in .jpeg.jpg*/
                    }
                case IMAGETYPE_PNG:
                    if (pathinfo($target_file, PATHINFO_EXTENSION) != png) {
                        $target_file .= ".png";
                    }
            }
            if (!file_exists("uploads") {
                mkdir($target_dir, 0777, true)
            }
            if (file_exists($target_file) {
                i = 1
                $tmp_name = pathinfo($target_file, PATHINFO_BASENAME) . "[$i]" .
                            pathinfo($target_file, PATHINFO_EXTENSION);
                i = 1;
                while (file_exists ($tmp_name)
                $i = 1
                do {
                    pathinfo($target_file, PATH

            if (move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $target_file)) {
                echo "Thank you! The upload is OK";
            } else {
                echo "Error saving file";
            }
        } else {
            echo "The file is not a JPEG or PNG!";
        }
    }
}
