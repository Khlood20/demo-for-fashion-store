<?php 
include 'Connection1.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title> products </title>

<style type="text/css" >
	#wonderful  {
		font: arial;
		text-align: left;
		font-size: 26;
         color: brown;

	}

#caption {
		font: arial;
		text-align: center;
		font-size: 32;
         color: brown;
         background-color: #f5f5f5; 
     }
#store{
	width: 600;
	height: 500;
	text-align: right;

}
</style>
   <body>
      
   <header style="background-color: pink ; text-align:center;"> <h1> Home Page </h1>  <pre> <NAV style="background-color: white ; text-align:center;">     <a href="retrieveproduct.php"> Retrieve product </a>     <a href="market.php"> Our Products </a>      <a href="about.html">About </a>  
</nav></pre></header>
                     
                           <li><a href="index.php">Home</a></li>
                           <li><a href="Login.php">Login</a></li>
                           <li><a href="register.php">Register</a></li>

                              <?php

                                session_start(); 
                                if(isset($_SESSION['success']))
                              {
                                 echo($_SESSION['success']);
                                    
                                } 
                              echo "<br>" ;
                              
                                 if(isset($_SESSION['Name']))
                                {

                                    echo($_SESSION['Name']);
                                    echo "<br>" ;
                                echo ("<a href='login.php?logout=1'>logout</a>");
                              }
                              ?>
                    

<section style="background-color:white;">

	<video controls src="thefashion.mp4" width="1500" height="600" autoplay loop>
  </section>
<br>  
<br>
<br>  
<br>

<section>
	<table width="1400" cellspacing="100">
        <tr>
            <th > <img id="store" src="storre.PNG" alt="the fashion store" > </th>
            <th id="wonderful"><b>Wonderful style </b>our collection is vast with clothes
                                      and accessories galore.Browse our website and you'll be
            	                      impressed by the selection and prices we offer</th>
           
        </tr>
        
    </table>
   
</section>
<br>
<br>  
<br>
<section>     

<table width="600"  hieght="540" cellspacing="150">
        <caption id="caption"><hr/><br>NEW COLLECTION<br> <hr/></caption>
            <tr>
                <th><a href="market.php"><img src="gigi5.PNG" alt="kardigan" width="300" height="350"> Winter</a></th>
                <th><a href="market.php"><img src="gigi4.PNG" alt=" dress" width="300" height="350">  Dresses</a></th>
                <th><a href="market.php"><img src="gigi3.PNG" alt="casual" width="300" height="350 "> Causual</a></th>
            </tr>
            <tr>
                <th><a href="market.html"><img src="bella00.PNG" alt="kardigan" width="300" height="350"> Summer</a> </th>
                <th><a href="market.html"> <img src="kids-clothes-2022-9.jpg" alt=" dress" width="300" height="350"> Kids</a></th>
            </tr>
   
    </table>
</section>


<FOOTER style="background-color:pink;text-align:center;"> <p> All rights reserved © 2022 <br> </p> <h3> Hotline 19345 </h3></FOOTER>

</body>
</html>




