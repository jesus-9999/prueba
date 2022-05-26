<?php require_once 'header.php';?>

<div class="container col-6">
<h1>Login</h1>
<form class="contentindex" action="../func/validar.php" method="POST">
  <div class="mb-3">
    <label for="" class="form-label">user</label>
    <input type="text" class="form-control" id="user" name="user" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="index.php"  class="btn btn-danger">ir al inicio</a>
</form>
</div>
<?php require_once 'footer.php';?>