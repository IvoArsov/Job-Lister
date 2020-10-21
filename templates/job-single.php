 <div class="container">
  <?php include "inc/header.php"; ?>
    <h2 class="page-header"><?php echo $job->job_title; ?> (<?php echo $job->location; ?>)</h2>
    <small>Posted by: <?php echo $job->contact_user; ?> on <em><?php echo $job->post_date; ?></em></small>
    <hr />
    <p class="lead"><?php echo $job->description; ?></p>
    <ul class="list-group">
        <li class="list-group-item"><strong>Company: </strong><?php echo $job->company; ?></li>
        <li class="list-group-item"><strong>Salary: </strong><?php echo $job->salary; ?></li>
        <li class="list-group-item"><strong>Contact Email: </strong><?php echo $job->contact_email; ?></li>
    </ul>
    <br />
    <br />
    <a href="index.php" class="btn btn-primary">BACK</a>
  <?php include "inc/footer.php"; ?>
</div>