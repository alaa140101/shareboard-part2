<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Register</h3>
  </div>
  <div class="panel-body">
    <form class="" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" placeholder="enter your name">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control" placeholder="enter your email">
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control" placeholder="add passwrod">
      </div>
      <input class="btn btn-primary" type="submit" name="submit" value="Submit">
    </form>
  </div>
</div>
