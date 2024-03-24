<?php
$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $user_email = $_POST['signupEmail'];
    $signup_pass = $_POST['password'];
    $signup_cpass = $_POST['cpassword'];
    // check if the user email already exist or not

    $existSql = "SELECT * FROM `userstable` where user_email = '$user_email'";
    $result= mysqli_query($conn, $existSql);
    $numRows = mysqli_num_rows($result);
    if($numRows>0){
        $showError = true;
        $showError = "This Email is already in use,";
        echo 'User with this email address already exist';
    }
    else{
        if($signup_pass == $signup_cpass){
//$hash = password_hash($signup_pass, PASSWORD_DEFAULT);
$sql = "INSERT INTO `userstable` (`user_email`, `user_pass`, `timestamp`) VALUES ('$user_email', '$signup_pass', current_timestamp());";

$result = mysqli_query($conn, $sql);
if($result){
    $showAlert = true;
    header("Location: /forum/index.php?signupsuccess=true");
    exit();
}
        }
        else{
            $showError = "Passwords are not matching here!";
            if($showError!="false"){
                echo 
                'Passwords you entered are not matching with each other';
            }
           
        }
    }
  //  header("Location: /forum/index.php?signupsuccess=false&error=$showError");
}


?>