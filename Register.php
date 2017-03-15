<!DOCTYPE html>
<html>
<head>
    <link rel = "stylesheet" href= "css/bootstrap.min.css">
    <style>
        h2 {
            color: black;
            font-family: verdana;
            text-align: center;
        }
        a {
            color: black;
            font-family: verdana;
            font-size: 20px;


        }
        h2 {
            padding-top: 50px;
            padding-right: 30px;
            padding-bottom: 10px;
            padding-left: 80px;
        }
        input{
            padding-top: 10px;
            padding-right: 8px;
            padding-bottom: 10px;
            padding-left: 15px;
        }

        body{
            background-color: #FF8C00;
        }
    </style>
</head>
<body>
<h2>Registration Page</h2>
<center><a href="Template.html">Click here to go back</a><br/><br/></center>
<form action="Register.php" method="post">
   <center> Enter Username: <input type="text" name="username" required="required"/> <br/><br></center>
   <center> Enter Password: <input type="password" name="password" required="required" /> <br/><br></center>
    <center> <input type="submit" value="Register"/></center>
</form>
<script src="js/bootstrap.min.js"> </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">

</script>

</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = mysql_real_escape_string($_POST['username']);
    $password = mysql_real_escape_string($_POST['password']);
    $bool = true;
    mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
    mysql_select_db("first_db") or die("Cannot connect to database"); //Connect to database
    $query = mysql_query("Select * from users"); //Query the users table
    while($row = mysql_fetch_array($query)) //display all rows from query
    {
        $table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
        if($username == $table_users) // checks if there are any matching fields
        {
            $bool = false; // sets bool to false
            Print '<script>alert("Username has been taken!");</script>'; //Prompts the user
            Print '<script>window.location.assign("Register.php");</script>'; // redirects to Register.php
        }
    }
    if($bool) // checks if bool is true
    {
        mysql_query("INSERT INTO users (username, password) VALUES ('$username','$password')"); //Inserts the value to table users
        Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
        Print '<script>window.location.assign("Register.php");</script>'; // redirects to Register.php
    }
}
?>