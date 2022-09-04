<?php include 'header.php' ?>
<?php include 'config.php'?>



<?php

session_start();

if(!isset($_SESSION["user_id"])) {
  header("Location: register.php");
}




?>

<!-- Page content -->
<div class="content">
<p>
  <!--<a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Link with href
  </a>-->
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
   Post Job
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form action="" method="POST">
  <div class="mb-3">
    <label for="Company Name" class="form-label">Company Name</label>
    <input type="text" class="form-control" id="" name="cname" >
    
  </div>
  <div class="mb-3">
    <label for="Position" class="form-label">Position</label>
    <input type="text" class="form-control" id="exampleInputPosition" name="position">
  </div>
  <div class="mb-3">
    <label for="Job Description" class="form-label">Job Description</label>
    <input type="text" class="form-control" id="Job description" name="jdesc">
  </div>
  <div class="mb-3">
    <label for="skills" class="form-label">Skills Required</label>
    <input type="text" class="form-control" id="skills" name="skills">
  </div>
  <div class="mb-3">
    <label for="CTC" class="form-label">CTC</label>
    <input type="text" class="form-control" id="CTC" name="CTC">
  </div>
  <button type="submit" class="btn btn-primary" name="job">Submit</button>
</form>
  </div>
</div>

<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Sl.no</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
  <tbody>
    <?php

    $sql="select cname,position,CTC from jobs";
    $result=mysqli_query($conn,$sql);
    $i=0;
    if($result->num_rows> 0) {
      while($rows=$result->fetch_assoc()){ 
        echo"
        <tbody>
        <tr>

    
    <td>".++$i."</td>
    <td>".$rows['cname']."</td>
    <td>".$rows['position']."</td>
    <td>".$rows['CTC']."</td>
    </tr>";
     
  }}
  else{
    echo"";
  }

    ?>
    
  </tbody>
</table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>