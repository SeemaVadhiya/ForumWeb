<?php
session_start();
//$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $email = $_POST['email'];
    $pass = $_POST['loginpass'];

    $sql = "SELECT * FROM `userstable` where user_email = '$email'";
    $result= mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);
    if($numRows==1){
        $row = mysqli_fetch_assoc($result);
        $hashedPasswordFromDB = $row['user_pass'];
        if(password_verify($pass, $hashedPasswordFromDB)){
            $_SESSION['loggedin'] = true;
            $_SESSION['useremail'] = $email;
            echo "Logged in as " . $email;
        }
        else{
            echo 'unable to login';
            echo 'Hashed Password from DB: ' . $hashedPasswordFromDB;
            echo 'Entered Password: ' . $pass;
        }




    }







}

?>