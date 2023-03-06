<?php
session_start();
include'../core/funcations.php';
include'../core/validation.php';

$errors =[];
if(checkMethod("POST") && checkInputName('name'))
{
  foreach($_POST as $key => $value){
  $$key = sanitize($value);
  }
if(!requireVal($name)){
  $errors []= "name is required";
}elseif( !minVal($name , 5)){
  $errors [] = "name must be greater then 5";
}elseif( !maxVal($name , 20)){
  $errors [] = "name must be smaller then 20";
}
}
else{
  $errors [] = "invalid method";
}

if(!requireVal($email)){
  $errors []= "email is required";
}elseif( !eamilVal($email)){
  $errors [] = "please type valid email";
}
if(!requireVal($password)){
  $errors []= "password is required";
}elseif( !minVal($password , 6)){
  $errors [] = "password must be greater then 6";
}elseif( !maxVal($password , 20)){
  $errors [] = "password must be smaller then 20";
}

if(empty($errors)){
  $user_file = fopen("../data/users.csv" ,"a+");
  $data = [$name ,$email ,$password ];
  fputcsv($user_file, $data);
  $_SESSION['auth'] = [$name ,$email];
  header("location:../index.php");
  die;
}else{
  $_SESSION['errors'] = $errors;
  header("location:../regester.php");
  die;
}

