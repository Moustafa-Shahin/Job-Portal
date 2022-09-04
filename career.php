<?php include 'header.php' ?>
<?php include 'config.php'?>



<?php

session_start();

if(!isset($_SESSION["user_id"])) {
  header("Location: register.php");
}

// echo $_SESSION["user_id"]


?>
<?php 
$sql="select * from jobs";
$result=mysqli_query($conn,$sql);
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.8.1/css/all.css">
    
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
<style>
   img{
    width: 200px;
    padding: 20px;
    align-self: center;
    margin-left: 30px;
   }
   .hero-img{
    align-items: center;
   }
   .sidebar
   {
    margin-top: 0;
   }

</style>



<div class="bodyContent">
    <div style="padding:3rem, margin-left:200px;">
    <div class="d-flex justify-content-center"><h2 style="margin-left: 20px;"><i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp;&nbsp;Jobs Available</h2></div>
      <br />
      <section class="women-collection pt-0" id="collection" style="margin-top: 30px;">
        <div class="container">
            
            <div class="row">
            <?php
        while ($row = $result->fetch_assoc()) : ?>
                <div class="col-12 col-md-6 hero-img">
                    
                    <a href="#"><img src="ok6.jpg" alt=""></a>
                    <div class="mt-2">
                        <div style="color: #111, margin-left:30px;">
                            <span class="text-uppercase font-weight-bold"><?php echo $row['cname'] ?></span><br>
                            <span>Position <?php echo $row['position']; ?></span><br>
                            <span>Job Description: <?php echo $row['jdesc']; ?></span><br>
                            <span>Skills: <?php echo $row['skills']; ?></span><br>
                            <span>CTC: <?php echo $row['CTC']; ?></span><br>
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
                            Apply Now
                              </button>
                           
                            
        </div>
                    </div>
                </div>
                <?php
        endwhile;
        ?>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apply Now</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Applying For</label>
            <input type="text" class="form-control" name="apply">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Qualification</label>
            <input type="text" class="form-control" name="qual">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Passing Year</label>
            <input type="text" class="form-control" name="year">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="applies" class="btn btn-primary">Apply</button>
    </form>
      </div>
    </div>
  </div>
</div>

</div><br>

    </section>
    </div></div>

        <!-- javascript includes -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        </body>

        </html>