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
<h2>Login Page</h2>
<a href="Template.html"><center>Click here to go back</center></a><br/><br/>
<form action="CheckLogin.php" method="post">
    <center>  Enter Username: <input type="text" name="username" required="required"/></center> <br/>
    <center>  Enter Password: <input type="password" name="password" required="required" /> </center><br/>
    <center><input type="submit" value="Login"/></center>
</form>
<script src="js/bootstrap.min.js"> </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">

</script>

</body>
</html>