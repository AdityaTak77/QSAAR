<?php
include 'connect.php';
if(isset($_POST['signup'])){
    $Name=$_POST['name'];
    $Age=$_POST['age'];
    $bloodgroup=$_POST['bloodgroup'];
    $email=$_POST['email'];
    $addess=$_POST['address'];

    $checkEmail="SELECT * From users where email='$email'";
    $result=$conn->query($checkEmail);
    if($result->num_rows>0){
        echo"Email Address Already Exists!";
    }
else{
    $insertQuery = "INSERT INTO users (name, age, email, bloodgroup, address) VALUES ('$Name', '$Age', '$email', '$bloodgroup', '$address')";

    if($conn->query($insertQuery)==TRUE){
        header("location: index.php");
        exit();
    }
    else{
        echo"Error:".$conn->error;
    }
}
}
if(isset($_POST['signIn'])){
    $email=$_POST['email'];

    $sql="SELECT* FROM users WHERE email='$email'"
    $result=$conn->query($spl);
    if($result->num_rows>0){
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['email']=$row['email'];
        header("Location:homepage.php");
        exit();
    }
    else{
        echo"Not Found, Incorrect Email";
    }
}
 ?>
