<?php
session_start();
include 'connection.php';
//echo 'I am here';
if (isset($_GET['login_form']))
{
    $email = $_GET['email'];
    $password = $_GET['password'];
   // echo $email;

   
    if (!filter_var($email)){
        $_SESSION['error'] = "Invalid email format";
        header("Location: login.php");
        exit();
   
    }

    $sql = "SELECT * FROM users WHERE Email = '$email'";
    //echo "SQL Query: " . $sql;
    $result = $conn->query($sql);
    if ($result->num_rows < 1) 
    {
        $_SESSION['error'] = "Incorrect email ";
        header("Location: login.php");
        exit();
    
    
    }
     else 
     {
        $row = $result->fetch_assoc();
        $encrypted_password= $row['Password'];
        $hash = password_verify($password, $encrypted_password);
        if (!$hash) 
        {
            $_SESSION['error'] = "Incorrect password";
            //echo "Hi";
            header("Location: login.php");
           exit();
        } else
        {
            //echo "Hello";
            $_SESSION['uid'] = $row['UID'];
            $_SESSION['email'] = $row['Email'];
            header("Location: index.html");


            //var_dump($_SESSION);
        
            exit();
        }

    }
};


