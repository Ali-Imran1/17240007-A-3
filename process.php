<?php
require_once "database/connection.php";
   

if(isset($_POST['submit'])){
    
    $errors = [];

    if(empty($_POST['fname'])){
        $errors[] = "Full Name is required";
    }
    else{
        $fname = trim($_POST['fname']);
    }

    if(empty($_POST['email'])){
        $errors[] = "Email is required";
    }
    else{
        $email = trim($_POST['email']);
    }

    if(empty($_POST['uname'])){
        $errors[] = "User Name is required";
    }
    else{
        $uname = trim($_POST['uname']);
    }

    if(empty($_POST['pn'])){
        $errors[] = "Phone Number is required";
    }
    else{
        $phone = trim($_POST['pn']);
    }

    if(empty($_POST['presAddress'])){
        $errors[] = "Present Address is required";
    }
    else{
        $presAddress = trim($_POST['presAddress']);
    }

    if(empty($_POST['perAddress'])){
        $errors[] = "Permanent Address is required";
    }
    else{
        $perAddress = trim($_POST['perAddress']);
    }
    
    if(empty($_POST['cnic'])){
        $errors[] = "CNIC is required";
    }
    else{
        $cnic = trim($_POST['cnic']);
    }

    if(empty($_POST['dob'])){
        $errors[] = "Date of Birth is required";
    }
    else{
        $dob = trim($_POST['dob']);
    }
    
    if(empty($errors)){
        $dbc = db_connect();
        $sql = "INSERT INTO users VALUES(NULL,'$fname','$email','$uname', '$phone','$presAddress','$perAddress','$cnic','$dob')";
        $result = mysqli_query($dbc,$sql);
        if($result){
            echo "<div class = 'alert alert-success'> Data Entered Successfully </div>";
        }
        else{
            echo "<div class = 'alert alert-danger'> Data Cannot be Entered due to error </div>";   
        }
        db_close($dbc);
    }
    else{
        foreach($errors as $error){
            echo "<div class = 'alert alert-danger'>$error</div>";
        }
    }
}
else{
     echo "<div class = 'alert alert-danger'>Form is not submitted </div>";
}
?>