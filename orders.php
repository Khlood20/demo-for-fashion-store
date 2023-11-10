
</<?php 
include 'connection.php';
 ?>
<!DOCTYPE html>
<html>
<head>
<title> E-commerce </title>
<meta name="keywords" content="HTML,CSS,PHP">



    <body>
    <header style="background-color: pink ; text-align:center;"> <h1> The Fashion Store </h1>  
<pre><nAV style="background-color: pink ; text-align:center;">     <a href="market.php"><b> OUR NEW PRODUCTS </b></a>     <a href="search.php"> <b>For Search</b> </a>     <a href="about.html"><b>ABOUT </b></a>       <a href="index.php"> <b>HOME</b> </a> 
</nav> </pre> </header>

    
    <form style="text-align:center"; action="project.html" method="post">
<label>NAME</label>
<input type="text" name="name" maxlength="30" required/><br><br>

<label>PHONE</label>
<input type="int" name="phone" maxlength="30"/><br><br>

<label>Email</label>
<input type="email" name="mail" maxlength="30"/><br><br>

<label>ADDRESS</label>
<textarea name="text" rows="5" cols="20"></textarea><br><br>

<label>NAME OF PRODUCTS</label>
<input type="text" name="pro" maxlength="30"/><br><br>

<label> SELECT YOUR SIZE</label>
<input type="radio" name="rd1"  value="L" checked="checked" /> L
<input type="radio" name="rd2"  value="XL"/> XL
<input type="radio" name="rd3"  value="XXL"/> XXL <br> <br>



<input type="submit" value="SUBMIT" /> 

</form>

</fieldset>
<FOOTER style="background-color:pink;text-align:center;"> <p> All rights reserved © 2022 <br> </p> <h3> Hotline 19345 </h3></FOOTER>

</body>
</html>
