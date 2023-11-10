
<?php 
include 'Connection1.php';
?>

<?php 

if(!isset ($_SESSION)){
   session_start();
}
//if user click the button//
if (isset($_POST['reg'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

    if ($password != $cpassword) {
        echo "password doesnot match";
    }
     else {
        $sql = "INSERT INTO user (username,email,password,cpassword) VALUES ('$username','$email','$password','$cpassword')";
        mysqli_query($con, $sql);
        $_SESSION['Name'] = $username;
        $_SESSION['success'] = "welcome dear";
        header("location:index.php");


    }

}

?>

<!DOCTYPE html>
<html>
<head>
<title> Internet application </title>
<meta name="keywords" content="HTML,CSS,PHP">
<style>
  body{
      background-color:white;
  }
  .registration-form {
    position: absolute;
    top: 46%;
    left: 50%;
    width: 400px;
    border: 1px slategray solid;
    background-color: #d3d3d3;
    transform: translate(-50%,-50%)
    
 }
</style>
</head>

    <body>
    <header style="background-color:white ; text-align:center;">  <h1> Our Store</h1> 
<pre><nAV style="background-color:white ; text-align:center;">     <a href="market.php"><b> OUR NEW PRODUCTS </b></a>          <a href="about.html"><b>ABOUT </b></a>       <a href="index.php"> <b>HOME</b> </a> 
</nav> </pre> </header>

    <form class="registration-form" style="text-align:center" method="POST" >
    <h1> Joining our community</h1> 
<label><b>Username</b></label><br>
<input type="text" name="username" maxlength="30" required/><br><br>

<label><b>Email</b></label><br>
<input type="email" name="email" maxlength="30"   required/><br><br>


<label for="password"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="password"  required><br><br>

<label for="cpassword"><b>Confirm Password</b></label><br>
    <input type="password" placeholder="Repeat Password" name="cpassword"  required><br><br>
   

<input type="submit"  name= "reg" value="Register"  class="btn"/> <br><br>
<p> Already member ?  <a href="Login.php"><u>log in </u></a> <br> </p>

</form>
<FOOTER >  </FOOTER>

</body>
</html>
