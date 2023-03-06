<?php
session_start();
include '../core/funcations.php';
include '../core/validation.php';

//print_r($_POST);
$errors= [];
if(!requireVal($_POST['email'])){
  $errors []= "email is required";
}elseif( !eamilVal($_POST['email'])){
  $errors [] = "please type valid email";
}
if(!requireVal($_POST['password'])){
  $errors []= "password is required";
}elseif( !minVal($_POST['password'], 6)){
  $errors [] = "password must be greater then 6";
}elseif( !maxVal($_POST['password'], 20)){
  $errors [] = "password must be smaller then 20";
}
if(empty($errors)){
  $_SESSION['auth'] = [$_POST['email'],$_POST['password']];
  $myfile = fopen("../data/users.csv", "a+");
while(!feof($myfile)) {
  $text = fgets($myfile);
   if( strpos($text ,$_POST['email']) && strpos($text ,$_POST['password'])){
     header("location: ../index.php");
   }else{
    echo "please enter a valid email and password";
   }
}
fclose($myfile);
  
  
    }else{
  $_SESSION['errors'] = $errors;
  header("location:../login.php");
  die;
}
