<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<title>image</title>
</head>
<body>
	<form method="POST" enctype="multipart/form-data">
		select image:
		<input type="file" name="image" />
		<input type="submit" name="submit" value="UPLOAD" />
	</form>

<?php
session_start();
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
        $usern=$_SESSION['var'];
        
        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'faws';
        
       
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
      
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        
        $insert = $db->query("INSERT INTO f_image (image,username) VALUES ('$imgContent','$usern')");
        if($insert){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
}
?>

</body>
</html>