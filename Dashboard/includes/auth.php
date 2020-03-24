<?php
if(!isset($_SESSION['loggedIn'])){
    header("location:login_type.php?task=PlseLogin");
}
?>