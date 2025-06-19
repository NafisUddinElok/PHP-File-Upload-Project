<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(isset($_FILES["uploadedFile"]) && $_FILES["uploadedFile"]["error"] == 0){

        $file_name = $_FILES["uploadedFile"]["name"];
        $file_tmp = $_FILES["uploadedFile"]["tmp_name"];
        $file_size = $_FILES["uploadedFile"]["size"];
        $file_type = $_FILES["uploadedFile"]["type"];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        $allowed = [
            "jpg",
            "jpeg",
            "png",
            "pdf",
            "txt"
        ];

        if(!in_array($file_ext, $allowed)){
            echo " Invalid file type";
        }
        else if($file_size > 2 * 1024 * 1024){
            echo "File is too large (max 2MB)";
        } else {
            $new_name = uniqid("file_", true) . ".". $file_ext;
            $destination = "uploads/" . $new_name;

            if(move_uploaded_file($file_tmp, $destination)){
                echo " File uploaded successfully as : $new_name";
            } else {
                echo " Failed to upload file. ";
            }
        }
    } else {
        echo "NO file uploaded or error occurred. ";
    }
}
?>