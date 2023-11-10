<?php 
include 'Connection1.php';
if(!isset($_SESSION)){
    session_start();
}
// if user click the button
if(isset($_POST['login'])){
    $n = mysqli_real_escape_string($con, $_POST['username']);
    $p = mysqli_real_escape_string($con, $_POST['password']);
 $t = "Select * from `user` where username = '$n' && password = '$p'";
 $r = mysqli_query($con, $t);
 $_SESSION['Name'] = $n;
 $_SESSION['success'] = "welcome dear";

 if(mysqli_num_rows($r)== 1)
        {
            session_start();
           

            header("location:index.php");
        }
        else
        {
        echo "wrong data!";
        }
}

//logout
if(isset($_GET['logout'])){
    session_destroy ();
     unset($_SESSION['Name'] );
     unset($_SESSION['success'] );
    header("location:index.php");
}
     
?>


<!DOCTYPE html>
<html>
<head>
<title> Internet application </title>
<meta name="keywords" content="HTML,CSS,PHP">
<style>
  body{
      background-color: white;
  }
  .sec{
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
<h1 style="text-align:center";> Joining our community</h1>
<header style=" text-align:center;">  <pre> <NAV style="background-color: white ; text-align:center;">     <a href="retrieveproduct.php"> Retrieve product </a>     <a href="market.php"> Our Products </a>      <a href="about.html">About </a>  
</nav></pre></header> 
    <form class="sec" method="post" style="text-align:center";  >
        
                <h1 class="tech-title">Login Form</h1>
                              <div> 
                                <label >User Name</label><br><br>
                                <input type="text" name="username"  class="form-control" /><br><br>
                               
                                </div>
        
                                <div>
                                <label >Password</label><br><br>
                                <input type="password" name="password" class="form-control" /><br><br>
                                </div>
                        
                            
                        <div >
                            <input type="submit" name= "login" value="Login" class="btn btn-primary btn-lg"><br><br><br><br>
                        </div>


                        <div>
                        <label >Don't Have an Account?</label>
                            <a href="register.php">Registration</a><br><br>
                        </div>
                        <div>
                        <label >Go To </label>
                                <a href="index.php">Home Page</a><br><br>
                        </div>
                       
                    
            
        
       
    </form>
</body>
</html>