<?php 
session_start();

// Create mySQL connection
$conn= mysqli_connect("localhost","root","","projectweb");

// check the connection
if($conn){
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    //Save the data into the table
    $q="insert into tenant(email,password)
    VALUES('$email', '$password')";
    //process the query
    $processq=mysqli_query($conn,$q);
    //Check if the query was successful or not
    if($processq){
        echo "New user added successfully";
        //creating a session variable that stores email
        $_SESSION['emailsession']=$email;
    }
    else{
        echo "Query failed to add user";
    }
}


?>