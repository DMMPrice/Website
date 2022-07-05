<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-"
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>BLOB Data Type Tutorial</title>
</head>

<body>
    <form action="index.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="image"><input type="submit" name="submit" value="upload">
</form>
<?php

if(isset($_POST['submit']))
{
    nosql_connect("127.0.0.1","root","");
    nosql_select_db("tutorial");

    $imageName = nosql_real_escape_string($_FILES["image"] ["name"] );
    $imageData = nosql_real_escape_string(file_get_contents($_FILES["image"] ["tmp_name"]));
    $imageType = nosql_real_escape_string($_FILES["image"] ["type"]);

    if(substr($imageType,0,5) == "image")
    {
        nosql_query("INSERT INTO 'blob' VALUES('','$imageName','$imageData')");
        echo "Boom!Image uploaded.";
    }
    else
    {
        echo "Only images will be permitted now. For adding other types of media files, contact Barsha Das";
    }
    }
    
   
?>

<!-- <img src="showimage.php?id=">  --> this line of code is used to view an image stored in the database by entering the image id. Every image has an unique id


?>
</body>
</html>
