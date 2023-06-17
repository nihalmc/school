<?php 
session_start(); 
require 'dbcon.php';

if(isset($_POST ['student_delete']))
{
    $student_id =mysqli_real_escape_string($con,$_POST['student_delete']);

    $query = "DELETE FROM school WHERE id='$student_id' ";
    $query_run =mysqli_query($con,$query);

    if($query_run){
        $_SESSION['message']="Student Deleted Successfully";
        header("Location:index.php");
        exit(0);
    } 
    else
    {
        $_SESSION['message']="Student Not Deleted";
        header("Location:index.php");
        exit(0);
        
    }
}

if(isset($_POST['update_student']))
{
   
 $student_id =mysqli_real_escape_string($con,$_POST['student_id']);

 $name =mysqli_real_escape_string($con,$_POST['name']);
  $age =mysqli_real_escape_string($con,$_POST['age']);
  $dbrith =mysqli_real_escape_string($con,$_POST['dbrith']);
  $phone =mysqli_real_escape_string($con,$_POST['phone']);
  $email =mysqli_real_escape_string($con,$_POST['email']);
  $gender =mysqli_real_escape_string($con,$_POST['gender']);




$query = "UPDATE school SET name='$name',age='$age' ,dbrith='$dbrith', phone='$phone',email='$email', gender='$gender' WHERE id='$student_id'";

$query_run =mysqli_query($con,$query);

if($query_run)
{
    $_SESSION['message']= "Student Update Successfully";
    header("Location: index.php");
    exit(0);
}
else
{
    $_SESSION['message']= "Sonor Not Update";
    header("Location: index.php");
    exit(0);
}

}


if(isset($_POST['save_student'])){

  $name =mysqli_real_escape_string($con,$_POST['name']);
  $age =mysqli_real_escape_string($con,$_POST['age']);
  $dbrith =mysqli_real_escape_string($con,$_POST['dbrith']);
  $phone =mysqli_real_escape_string($con,$_POST['phone']);
  $email =mysqli_real_escape_string($con,$_POST['email']);
  $gender =mysqli_real_escape_string($con,$_POST['gender']);

$query ="INSERT INTO school(name,age,dbrith,phone,email,gender)
 VALUES('$name','$age','$dbrith','$phone','$email','$gender')";

$query_run= mysqli_query($con, $query);

if($query_run)
{   
    $_SESSION['message']= "Student Created Successfully";
    header("Location: add.php");
    exit(0);
          
        }
        else
        {
            $_SESSION['message'] = "Student Not Created";
            header("Location: add.php");
            exit(0);
        } 

}

?>
