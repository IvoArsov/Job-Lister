<?php include "inc/header.php"; ?>
<div class="jumbotron">
  <h1 class="display-4">Hello, world!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
  <?php foreach($jobs as $job): ?>
  <div class="row">
    <div class="col-md-10">
      <h4><?php echo $job->job_title; ?></h4>
      <p><?php echo $job->description; ?></p>
    </div>
    <div class="col-md-2">
      <a href="#" class="btn btn-primary">View</a>
    </div>
  </div>
  <?php endforeach(); ?>
</div>
<?php include "inc/footer.php"; ?>