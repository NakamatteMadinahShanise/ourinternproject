<?php
require("config.php");

if(isset($_POST['register'])){

$fname = $_POST['fname'];
$email = $_POST['email'];
$password = ($_POST['password']);

$save = mysqli_query($conn, "insert into clients(fname, email, password) values('$fname','$email','$password')");

if ($save) {
?>

<script>alert("User registered successfully")</script>


<?php
}
}

?>
<html>
    <head>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<title>Tuesday Class Project</title>   
</head>
    <body style="background: url(background.jpg); background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <br>
        <br>
        <div  style="background: #fff; width:30%; padding:20px; opacity: 0.9;">
     
<h3>Online Real Estate System</h3>
<form method="post" action="">
    <input type="text" name="fname" class="form-control" placeholder="Enter Your Full Name" style="margin-bottom: 10px;"/>
    <input type="email" name="email" class="form-control" placeholder="Enter your Email Address" style="margin-bottom: 10px;"/>
    <input type="password" name="password" class="form-control" placeholder="Enter your password" style="margin-bottom: 10px;"> 
    <input type="submit" name="register" class="btn btn-primary" value="Register">

</form>

<p>Already have an account? <a href="login.php">Login</a></p>
    </div>
</div>
</body>
</html>