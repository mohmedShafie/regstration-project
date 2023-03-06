<<?php include'inc/header.php'; ?>
<?php include 'inc/nav.php'; ?>
<?php 
if(isset($_SESSION['auth'])){
  header("location:login.php");
  die;
}
?>

<div class="container">
<h1  class="text-center border p-5 my-3">login page</h1>
  <div class="row">
    <div class="coi-8 mx-auto p-2"></div>
    <?php
        if(isset($_SESSION['errors'])):
           foreach($_SESSION['errors'] as $error ): ?>
               <div class="alert alert-danger text-center">
                   <?php echo $error; ?>
              </div>
      <?php   
            endforeach;
            unset($_SESSION['errors']);
          endif; 
      ?>
    <form action="./handlers/handeLogin.php" method="POST" class="p-3 border">
      <div class="mb-3">
      <input type="email" name="email" class="form-control mb-2" id="email" placeholder="type user email">
      <input type="password" name="password" class="form-control mb-2 " id="password" placeholder="type password">
      <input type="submit" value="login" class="form-control btn-success mb-2" id="login">
      </div>
    </form>
  </div>
</div>
<?php include'inc/footer.php'; ?>