
<?php 
include 'connection.php';
 ?>
<!DOCTYPE html>
<html>
<head>
<title> E-commerce </title>
<meta name="keywords" content="HTML,CSS,PHP">
<style>
  img {
    width: 250;
    height: 300;
    
 }
</style>

    <body>
    <header style="background-color: pink ; text-align:center;"> <h1> The Fashion Store </h1>  
<pre> <NAV style="background-color: white ; text-align:center;"><a href="index.php"> <b>HOME</b> </a>    <a href="market.php"> Our Products </a>   <a href="search.php"> For Search </a>   <a href="about.html">About </a>  <a href="orders.php"> Make Orders </a>
</nav></pre></header>


<article style="height: 1000px;">
    
         <form method="post"> <label for="search"> Search</label>
           <input type="text" name="srh" class="searchbar" placeholder="Type something..." size="60" required>
<button name="button1"> Go </button>
</form>


<form id="right" method="post"> <label> Sort By:</label>
        <select name="sorting" required>
           <option> --Select Option-- </option>
           <option value="low"> Price: Low to High </option>
           <option value="high"> Price: High to Low </option>
        </select>
        <input type="submit" Value="Sort_Your_Products" name="button2">
         </form>
   

    <?php
//retrieve Data
if (isset($_POST['button1'])) {
  ?>
  <center>
    <table>
      <?php
  $st=$_POST['srh'];
  $myquery="select * from `products` where `Name` like '%$st%'"; 
$result= mysqli_query($con,$myquery);
while ($row=mysqli_fetch_array($result)) {
  ?>
 <tr style="text-align: center;display: inline;"> 
<td style="border: thin solid lightgrey; width:250px;"> <pre>
<img src="<?php echo $row['image']; ?>">

<b><?php echo $row['Name'];  ?> </b>
<span style="color: blue; font-weight:bold;"><?php echo $row['price'];  ?> </span>
<b><?php echo $row['description'];  ?> </b>
</pre>
 </td>


  </tr>
<?php
}

}
?>
</table></center>


<?php
//sort_Data
if (isset($_POST['button2'])) {
  ?>
  <center>
    <table>
      <?php
  $opt=$_POST['sorting'];
  if ($opt=="low") {
    $qq="select * from `products` order by `price` ASC";
    $re=mysqli_query($con,$qq);
    while ($row=mysqli_fetch_array($re)) {
      ?>

<tr style="text-align: center;display: inline;"> 
<td style="border: thin solid lightgrey; width:250px; height:300px;"> <pre>
<img src="<?php echo $row['image']; ?>">

<b><?php echo $row['Name'];  ?> </b>
<span style="color: blue; font-weight:bold;"><?php echo $row['price'];  ?> </span>
<b><?php echo $row['description'];  ?> </b>
</pre>
 </td>


  </tr>

      <?php
    }
  }else{
$qq="SELECT * FROM `products` order by `price` DESC";
    $re=mysqli_query($con,$qq);
    while ($row=mysqli_fetch_array($re)) {
      ?>
<tr style="text-align: center;display: inline;"> 
<td style="border: thin solid lightgrey;width:250px; height:300px;"> <pre>
<img src="<?php echo $row['image']; ?>">

<b><?php echo $row['Name'];  ?> </b>
<span style="color: blue; font-weight:bold;"><?php echo $row['price'];  ?> </span>
<b><?php echo $row['description'];  ?> </b>
</pre>
 </td>

  </tr>
<?php
  }
}
}
?>
</table></center>
</article>
</pre>
<FOOTER style="background-color:pink;text-align:center;"> <p> All rights reserved © 2022 <br> </p> <h3> Hotline 19345 </h3></FOOTER>

</body>
</html>
