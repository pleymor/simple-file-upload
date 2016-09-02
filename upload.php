<?php
$target = basename( $_FILES['photo']['name']);
$pic=($_FILES['photo']['name']);
if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
{
    //Tells you if its all ok
    echo "The file ". basename( $_FILES['photo']['name']). " has been uploaded, and your information has been added to the directory";
}
else {
    //Gives and error if its not
    echo "Sorry, there was a problem uploading your file.";
}
?>