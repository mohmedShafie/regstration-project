<?php
function requireVal($input){
  if(empty($input)){
    return false;
  }
  return true ;
}
function minVal($input , $length){
  if(strlen($input) < $length){
    return false;
  }
  return true ; 
}
function maxVal($input , $length){
  if(strlen($input) > $length){
    return false;
  }
  return true ; 
}