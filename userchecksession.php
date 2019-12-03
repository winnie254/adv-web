<?php
//start sessions
session_start();
//retrieve the session variable data
$email=$_SESSION['emailsession'];
echo $email;
?>