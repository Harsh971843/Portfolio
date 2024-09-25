<?php

$conn = mysqli_connect("localhost","root","","harsh_portfolio");

if(!$conn){
    echo "Error";
}
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO form (`name`, `email`, `message`) VALUES ('$name','$email', '$message')";
if (mysqli_query($conn, $sql)) {
        echo "You data inserted Successfully";
    }else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    } 

mysqli_close($conn);
?>



