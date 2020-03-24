<?php
session_start();
if(!isset($_SESSION['loggedIn'])){
    header("location:login_type.php?task=PlseLogin");
}
?>