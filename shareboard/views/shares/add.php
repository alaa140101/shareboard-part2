<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Share something</h3>
  </div>
  <div class="panel-body">
    <form class="" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
      <div class="form-group">
        <label>Share title</label>
        <input type="text" name="title" class="form-control" placeholder="add title">
      </div>
      <div class="form-group">
        <label>Body</label>
        <textarea class="form-control" name="body" rows="8" cols="80"></textarea>
      </div>
      <div class="form-group">
        <label>Link</label>
        <input type="text" name="link" class="form-control" placeholder="add URL">
      </div>
      <input class="btn btn-primary" type="submit" name="submit" value="Submit">
      <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares">Cancel</a>
    </form>
  </div>
</div>
