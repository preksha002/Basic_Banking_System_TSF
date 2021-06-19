<?php
include("config2.php");
extract($_POST);
$sql = "INSERT INTO `contact_data`(`firstname`, `lastname`, `phone`, `email`, `message`) VALUES ('".$firstname."','".$lastname."',".$phone.",'".$email."','".$message."')";
$result = $mysqli->query($sql);
if(!$result){
    die("Couldn't enter data: ".$mysqli->error);
}
echo "<script> alert('Request has been submitted ! :)');
                               window.location='contact.php';
                     </script>";
$mysqli->close();
?>