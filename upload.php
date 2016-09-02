<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

$fileName=($_FILES['file']['name']);
$target=basename($fileName);

$file=($_FILES['file']['tmp_name']);

var_dump($file, $target, $_FILES['file']);
$result=move_uploaded_file($file, $target);
if($result) {
    echo "The file ". $target. " has been uploaded, and your information has been added to the directory";
}
else {
    $msg='Sorry, there was a problem uploading your file: '.$result;
    echo $msg;
    header($msg, true, 500);
}
?>