<?php
@session_start();
function check_login(){
    if(!isset($_SESSION['UID'])){
        $_SESSION['error'] = "You need to login first";
        header("Location: login.php");
        exit();
    }
}