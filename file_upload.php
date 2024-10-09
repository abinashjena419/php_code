<?php

if(isset($_FILES['image'])){

    // echo "<pre>";
    // print_r($_FILES);
    // echo "</pre>";

    $file_name = $_FILES['image']['name'];
    $file_full_path = $_FILES['image']['full_path'];
    $file_tmp_name = $_FILES['image']['tmp_name'];
    $file_error = $_FILES['image']['error'];
    $file_size = $_FILES['image']['size'];

   if (move_uploaded_file($file_tmp_name, "upload/". $file_name)){

        echo "upload successfully";
    
   }else{

        echo "file not uploaded";
   }
    

}  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method = "POST" enctype = "multipart/form-data">
        <input type="file" name = "image" /><br><br>
        <input type="submit">
    </form>
</body>
</html>