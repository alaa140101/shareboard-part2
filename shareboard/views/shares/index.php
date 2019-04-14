<div class="card">
  <?php if (isset($_SESSION['is_logged_in'])) : ?>
    <a class="btn btn-primary text-dark btn-share card-header" href="<?php echo ROOT_PATH;?>shares/add">Share somthing</a>
  <?php endif; ?>
  <?php foreach($viewModel as $item): ?>
    <div class="card-body">
      <h5 class="card-title"><?php echo $item['title']?></h5>
      <small><div class="card-text"><?php echo $item['create_date']; ?></div></small>
      <p class="card-text"><?php echo $item['body']; ?></p>
      <a href="<?php echo "http://" . $item['link']; ?>" class="btn btn-primary" target="_blank" >Go to website</a>
      <br>
    </div>
  <?php endforeach; ?>
</div>
