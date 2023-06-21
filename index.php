<?php 
session_start(); 
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>School Application Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    
  <div class="container mt-4">
  <?php include('message.php');  ?>
  
    <div class="row">
        <div class="col-md-12">
            <div class="card">
           <div class="card-header">
            <h4>SCHOOL APPLICATION DETAILS
                <a href="add.php" class="btn btn-primary float-end">Add Student</a>
            </h4>
           </div>
           <div class="card-body">
            <table class="table table-borderd table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Studnt Name</th>
                        <th>Age</th>
                        <th>Date of Birth</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Gander</th>
                        <th>Address</th>

                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $query ="SELECT * FROM school";
                    $query_run = mysqli_query($con,$query);
                   

                    if(mysqli_num_rows($query_run) > 0)
                    {

                        foreach($query_run as $student){
                           
                            ?>
                     <tr>
                     <td><?= $student['id']; ?></td>
                         <td><?= $student['name']; ?></td>
                         <td><?=$student['age']; ?></td>
                         <td><?= $student['dbrith']; ?></td>
                         <td><?= $student['phone']; ?></td>
                         <td><?= $student['email']; ?></td>
                         <td><?= $student['gender']; ?></td>
                         <td><?= $student['address']; ?></td>
                    </tr>
                            <?php
                        }

                    }else{
                        echo "<h2> No Record Fonud </h5>";
                    }
                    ?>
                    
                </tbody>
            </table>
           </div>
           <div class="card-body">
           <table class="table table-borderd table-striped">
                <thead>
                    <tr>
                      <th>Language</th>
                        <th>CourseName</th>
                        <th>Action</th>
                        </tr>
                </thead>
                <tbody>
                    <?php 
                    $query ="SELECT * FROM school";
                    $query_run = mysqli_query($con,$query);
                   

                    if(mysqli_num_rows($query_run) > 0)
                    {

                        foreach($query_run as $student){
                           
                            ?>
                     <tr>
                     <td><?= $student['language']; ?></td>
                         <td><?= $student['courseName']?></td>
                         <td>
                            <a href="view.php?id=<?= $student['id'];?>" class="btn btn-info btn-sm">View</a>
                            <a href="edit.php?id=<?= $student['id'];?>" class="btn btn-success btn-sm">Edit</a>
                  <form action="code.php" method="post" class="d-inline">
                    <button type="submit" name="student_delete" value="<?= $student['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                  </form>
                         </td>
                    </tr>
                            <?php
                        }

                    }else{
                        echo "<h2> No Record Fonud </h5>";
                    }
                    ?>
                    
                </tbody>
            </table>
           </div>
           </div>
            </div>
        </div>
    </div>
  </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html> 