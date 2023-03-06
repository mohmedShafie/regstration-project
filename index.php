<?php include'inc/header.php'; ?>
<?php include 'inc/nav.php'; ?>
<?php 
if(!isset($_SESSION['auth'])){
  header("location:login.php");
  die;
}
?>

<h1>home page</h1>
<?php include'inc/footer.php'; ?>


    