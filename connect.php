<?php
session_start();
$conn = mysqli_connect("localhost","root","","sgp_project");

    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $pc_number = $_POST['pc_number'];
    $room_number = $_POST['room_number'];
    $department = $_POST['department'];
    $date = date('y-m-d',strtotime($_POST['date']));
    $query ="insert into registration(name,number,email,pc_number,room_number,department,date) values('$name','$number','$email','$pc_number','$room_number','$department','$date')";
    $query_run = mysqli_query($conn,$query);
    
    if($query_run)
    {
        $_SESSION['status'] = "Date values Inserted";
        header("Location:doneregistration.php");
    }
    else
    {
        $_SESSION['status'] = "Date values Inserting Failed";
        header("Location:home.php");
    }


?>