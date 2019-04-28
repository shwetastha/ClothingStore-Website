<?php
if (isset($_POST['productId'])){
    include("connect.php");
    
    $id = $_POST['productId'];
    $desc=$_POST['productDesc'];
    $qty= $_POST['quantity'];
    $pr =$_POST['price'];
    $path="res/images/default.jpg";

    $uploadOk = 1;
    // Reference: https://www.w3schools.com/php/php_file_upload.asp
    // upload image to the server.
    if(isset($_FILES["imageToUpload"]["name"]) 
        && $_FILES["imageToUpload"]["name"] != null
        && $_FILES["imageToUpload"]["name"] != "" ){
        
        $target_dir = "/home/uli705_191a25/public_html/res/images/";
        $target_file = $target_dir . basename($_FILES["imageToUpload"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "<h3>Encountered Error: Sorry, file already exists.</h3>";
            $uploadOk = 0;
        }
        //File Formats accepted.
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "<h3>Encountered Error: Sorry, only JPG, JPEG, PNG & GIF files are allowed.</h3>";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk != 0 ) {
            //try to upload the file to the server. 
            if (move_uploaded_file($_FILES["imageToUpload"]["tmp_name"], $target_file)) {
                // when succeeded the $path will be updated to the correct image location.
                $uploadOk=1;
                $path="res/images/".basename($_FILES["imageToUpload"]["name"]);
            } else {
                echo "<h3>Encountered Error: Sorry, there was an error uploading your file.</h3>";
            }
        } 
    }

    if($uploadOk!=0){
        $result =  mysql_query("insert into products values($id,'$desc',$qty,$pr,'$path')", $dbh); 

        if($result){
            echo "<h3>Product ID ".$id." has been added successfully!</h3>";
        }else {
            // mysql_error contains the error from the insert statement. 
            echo "<h3>Encountered Error: ".mysql_error()."</h3>";
        }
    }

    
}
?>