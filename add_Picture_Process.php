<?php 

include 'db_connector.php';
$statusMsg = "";

/*Get the file extension using pathinfo() function in PHP 
and validate the file format to check whether the user selects an image file. 
Upload image to server using move_uploaded_file() function in PHP. 
Insert image file name in the MySQL database using PHP. 
Upload status will be shown to the user.
*/

//This is the folder the images are going to be stored in within the program
$targetDir = "uploads/";
//This is the file name "bob_law_blah.jpeg"
$fileName = basename($_FILES["file"]["name"]);
//This is the file path "uploads/bob_law_blah.jpeg"
$targetFilePath = $targetDir . $fileName;
$fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

if(isset($_POST["submit"])/* && !empty($_FILES["file"]["name"])*/){
    //This will test the filetypes
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
    if(in_array($fileType, $allowTypes)){
        //then it gets uploaded to the server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            //The file is inserted into the table
            $insert = $conn->query("INSERT INTO images_test (image, time) VALUES ('" . $fileName . "', NOW())");
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

if($_SESSION){
    echo $_SESSION[$statusMsg];
}