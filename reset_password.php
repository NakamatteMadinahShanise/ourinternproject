<?php
require("config.php");

if(isset($_POST['login'])){

$email = $_POST['email'];
// $password = md5($_POST['password']);

$login = mysqli_query($conn, "select * from clients where email ='$email'");

$count = mysqli_num_rows($login);


if ($count == 1) {

    $newpass = rand();
    $savepass = md5($newpass);
    $updatepassword = mysqli_query($conn, "update clients set password ='$savepass' where email='$email'");
  
    echo "Your new password is: ".$newpass;
} else{
    ?>
<script>alert("User not found")</script>
    <?php
}
}

?>




<html>
    <head>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <!-- <body style="background: url(background.jpg); background-repeat: no-repeat; background-size: cover;"> -->
   <body>
    <div class="container">
        <br>
        <br>
        <div  style="background: #fff; width:30%; padding:20px; opacity: 0.9;">
     
<h3>Online Real Estate System</h3>
<form method="post" action="">
    <input type="email" name="email" class="form-control" placeholder="Enter your Email Address" style="margin-bottom: 10px;"/>
  
    <input type="submit" name="login" class="btn btn-primary" value="Show Password">

</form>

<p>New Here? <a href="index.php">Register</a></p>
    </div>
</div>
</body>
</html>