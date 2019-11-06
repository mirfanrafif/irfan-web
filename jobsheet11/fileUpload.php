<?php 
$targetPath = "uploads/";
$targetPath = $targetPath . basename (
  $_FILES["uploadedFile"]["name"]
);

if (move_uploaded_file($_FILES["uploadedFile"]["tmp_name"], $targetPath)) {
  echo "The File " . basename($_FILES["uploadedFile"]["name"]). " has been uploaded";
}else{
  echo "there was an error uploading the file, please try again";
}
?>