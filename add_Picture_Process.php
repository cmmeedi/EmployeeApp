<?php 

include 'db_connector.php';
$statusMsg = "";

/*Get the file extension using pathinfo() function in PHP 
and validate the file format to check whether the user selects an image file. 
Upload image to server using move_uploaded_file() function in PHP. 
Insert image file name in the MySQL database using PHP. 
Upload status will be shown to the user.
*/


$targetDir = "uploads/";
$fileName = $targetDir . basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

if(isset($_POST["submit"])/* && !empty($_FILES["file"]["name"])*/){
    //This will test the filetypes
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
    if(in_array($fileType, $allowTypes)){
        //then it gets uploaded to the server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            //The file is inserted into the table
            $insert = $conn->query("INSERT INTO profile_images (file_name, uploaded_on) VALUES ('" . $fileName . "', NOW())");
            if($insert){
                $statusMsg = "The file " . $fileName . " has been uploaded successfully";
            }
            else{
                $statusMsg = "Upload failed, Please try again";
            }
        }
        else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }
    else{
        $statusMsg = "Sorry, only JPG, JPEG, PNG, and GIF files are allowed to upload";
    }
}
else{
    $statusMsg = "Please select a file to upload.";
}

echo $statusMsg;




$pic = $_GET['pictureFile'];

//This is going to be used to validate the file is a picture
pathinfo();

//This is going to be used to upload the file to the DB
move_uploaded_file($filename, $destination);