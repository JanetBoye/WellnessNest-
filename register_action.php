<?php
include 'connection.php'; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $encrypted_password = password_hash($password, PASSWORD_DEFAULT);
    
    $query = "INSERT INTO users (First_name,Last_name, Email, Password) VALUES ('$fname', '$lname', '$email','$encrypted_password')";

    if (mysqli_query($conn, $query)) {
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}

