<?php include "inc/header.php"; ?>
<div class="jumbotron">
  <h1 class="display-4">Find a job</h1>
  <form action="index.php" method="GET">
    <select name="category" class="form-control">
      <option value="0">Choose Category</option>
      <?php foreach($categories as $category) : ?>
        <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
      <?php endforeach; ?>
    </select>
    <br/>
    <input type="submit" class="btn btn-primary" value="FIND" />      
  </form>
  
</div>

<div class="col-md-6">
  <h2><?php echo $title; ?></h2>
  <br/>
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
  <?php endforeach;?>
</div>

<?php include "inc/footer.php"; ?>