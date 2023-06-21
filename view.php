<?php 
session_start(); 
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>$student registration system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    

<div class="container mt-5">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Student View Details
                        <a href="index.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <?php 
                    if(isset($_GET['id']))
                    {
                        $student_id = mysqli_real_escape_string($con,$_GET['id']);
                        $query ="SELECT * FROM school WHERE id='$student_id'";
                        $query_run=mysqli_query($con,$query);

                        
                       if(mysqli_num_rows($query_run) > 0)
                       {
                        $student =mysqli_fetch_array($query_run);
                        ?>


                   
                    <div class="mb-3">
                        <label>Donor Name:-</label>
                     <p class="">
                     <?= $student['name']; ?>
                     </p>

                    </div>
                    <div class="mb-3">
                        <label>Age</label>
                        <p class="">
                        <?= $student['age']; ?>
                     </p>
                    </div>
                    <div class="mb-3">
                        <label>Date of Birth</label>
                        <p class="">
                        <?= $student['dbrith']; ?>
                     </p>
                    </div>

                    <div class="mb-3">
                        <label>Student Phone</label>
                        <p class="">
                     <?= $student['phone']; ?>
                     </p>
                    <div class="mb-3">
                        <label>Email</label>
                        <p class="">
                        <?= $student['email']; ?>
                     </p>
                    </div>
                    <div class="mb-3">
                        <label>Gender</label>
                        <p class="">
                        <?= $student['gender']; ?>
                     </p>
                    </div>

                    <div class="mb-3">
                        <label>Address</label>
                        <p class="">
                        <?= $student['address']; ?>
                     </p>
                    </div>
                    <div class="mb-3">
                        <label>Language</label>
                        <p class="">
                        <?= $student['language']; ?>
                     </p>
                    </div>
                    <div class="mb-3">
                        <label>CourseName</label>
                        <p class="">
                        <?= $student['courseName']; ?>
                     </p>
                    </div>
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