<?php

if(isset($_POST)){

       $size = $_FILES["file"]["size"];
       $name = $_FILES["file"]["name"];
       $type = $_FILES["file"]["type"];

       echo "Filename: ". $name;
       echo "<br> Filetype: ". $type;
       echo "<br> Filesize: ". $size;
       
       $destination = "uploads/$name";
       $temp_name = $_FILES["file"]["tmp_name"];

       if(move_uploaded_file($temp_name, $destination)){
        echo "file uploaded successfully";
       }else{
        echo "opps, file not uploaded";
       }
}