<?php 
session_start(); 
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    

<div class="container mt-5">

<?php include('message.php');  ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Student Edit
                        <a href="index.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <?php 
                    if(isset($_GET['id']))
                    {
                        $student_id = mysqli_real_escape_string($con, $_GET['id']);
                        $query ="SELECT * FROM school WHERE id='$student_id' ";
                        $query_run = mysqli_query($con,$query);

                        
                       if(mysqli_num_rows($query_run) > 0)
                       {
                        $student =mysqli_fetch_array($query_run);
                        ?>
                      
                    <form action="code.php" method="post">


                    <input type="hidden" name="student_id" value="<?= $student['id']; ?>" >
                    <div class="mb-3">
                        <label> </label>
                        <input type="text" name="name" id="" value="<?= $student['name']; ?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Age</label>
                        <input type="text" name="age" id="" value="<?= $student['age']; ?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Date of Birth</label>
                        <input type="date" name="dbrith" id="" value="<?= $student['dbrith']; ?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Phone Number</label>
                        <input type="text" name="phone" id="" value="<?= $student['phone']; ?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" id="" value="<?= $student['email']; ?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Gender:</label>
                        <input type="radio" name="gender" value="Male" <?php if($gender == 'Male'){ echo "checked";} ?> >Male

                         <input type="radio" name="gender" value="Female" <?php if($gender == 'Female'){ echo "checked";} ?>>Female

                    </div>
                    <div class="mb-3">
                        <label>Address</label>
                        <input type="text" name="address" value="<?= $student['address']; ?>" id="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">language:</label>
                        <input type="text" value="" name="language" class="form-control" placeholder="Gujrati,Hindi,English,Marathi">
                    </div>
                    <div class="mb-3">
                    
                        <button type="submit" name="update_student" class="btn btn-primary">Update Student</button>
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