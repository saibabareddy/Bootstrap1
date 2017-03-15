<!DOCTYPE html>
<html>
<head>
    <link rel = "stylesheet" href= "css/bootstrap.min.css">
    <style>
        body{
            background-color: #FF8C00;
        }

    </style>
</head>
<?php
session_start(); //starts the session
if($_SESSION['user']){ // checks if the user is logged in
}
else{
    header("location: Template.html"); // redirects if user is not logged in
}
$user = $_SESSION['user']; //assigns user value
?>
<body>
<h2>Home Page</h2>
<p> Hello <?php Print "$user"?>!</p> <!--Display's user name-->
    <a href="Logout.php">Click here to go logout</a><br/><br/>


</body>
</html>