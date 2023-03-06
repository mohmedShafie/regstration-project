<?php
function checkMethod($method){
  if($_SERVER['REQUEST_METHOD'] =="POST"){
    return true;
  }
  return false;
}
function checkInputName($name){
  if( isset($_POST['name'])){
    return true;
  }
  return false;
} 
function sanitize($input){
  return trim(htmlspecialchars(htmlentities($input)));
}
function eamilVal($email ){
  if(!filter_var($email,FILTER_VALIDATE_EMAIL))
  {
    return false;
  }
return true;
}