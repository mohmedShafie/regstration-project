<?php include'inc/header.php'; ?>
<?php include 'inc/nav.php'; ?>
<?php include'inc/footer.php'; ?> 
<?php 
if(isset($_SESSION['auth'])){
  header("location:regester.php");
  die;
}
?>
<div class="container">
  <div class="row">
    <div class="col-8 mx-auto my-5">
      <h2 class="border p-2 my-2 text-center">regester </h2>
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
      <form action="handlers/handelRegister.php" method="POST" class="border p-3">
      <div class="form-group p-2 my-1">
        <label for = "name">name</label>
        <input type="text" name="name" class="form-control" id="name">
      </div>
      <div class="form-group p-2 my-1">
        <label for = "email">email</label>
        <input type="email" name="email" class="form-control" id="email">
      </div>
      <div class="form-group p-2 my-1">
        <label for = "password">password</label>
        <input type="password" name="password" class="form-control" id="password">
      </div>
      <div class="form-group p-2 my-1">
        <input type="submit" value="regester" class="form-control" id="name">
      </div>  
      </form>
    </div>
  </div>
</div>