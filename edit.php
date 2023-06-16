<?php 
session_start(); 
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Donor Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    

<div class="container mt-5">

<?php include('message.php');  ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Donor Edit
                        <a href="index.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <?php 
                    if(isset($_GET['id']))
                    {
                        $donor_id = mysqli_real_escape_string($con, $_GET['id']);
                        $query ="SELECT * FROM school WHERE id='$donor_id' ";
                        $query_run = mysqli_query($con,$query);

                        
                       if(mysqli_num_rows($query_run) > 0)
                       {
                        $donor =mysqli_fetch_array($query_run);
                        ?>
                      
                    <form action="code.php" method="post">


                    <input type="hidden" name="donor_id" value="<?= $donor['id']; ?>" >
                    <div class="mb-3">
                        <label> Name</label>
                        <input type="text" name="name" id="" value="<?= $donor['name']; ?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Donor Address</label>
                        <input type="text" name="age" id="" value="<?= $donor['age']; ?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Blood Group</label>
                        <input type="text" name="dbrith" id="" value="<?= $donor['dbrith']; ?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Phone Number</label>
                        <input type="text" name="phone" id="" value="<?= $donor['phone']; ?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Date</label>
                        <input type="email" name="email" id="" value="<?= $donor['email']; ?>" class="form-control">
                    </div>
                    <div class="mb-3">
                    
                        <button type="submit" name="update_student" class="btn btn-primary">Update Donor</button>
                    </div>
                    </form>
                    <?php
                       } 
                       else
                       {  
                        echo"<h4>No Such Id Fonud<h4>";
                    }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>