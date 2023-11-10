
<?php 
include 'connection.php';
 ?>
<html>

<head>
<title> products </title>
<style>
  img {
    width: 250;
    height: 300;
    
 }
</style>

</head>

<body>

<header style="background-color: pink ; text-align:center;"> <h1 style="font-size: 40;"> Our Products </h1>  <pre> <NAV style="background-color: pink ; text-align:center;">      <a href="about.html">About </a>  <a href="index.php"> HOME </a>
</nav></pre>
</header><br><br><br><br><br>

<form id="right" method="post"> <label> Sort By:</label>
        <select name="sorting" required>
           <option> --Select Option-- </option>
           <option value="low"> Price: Low to High </option>
           <option value="high"> Price: High to Low </option>
        </select>
        <input type="submit" Value="Sort_Your_Products" name="button2">
         </form>

         <article>
             
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

<table width="600" height="550" cellspacing="150" >

<caption style="font-size:60; color:brown" ><b> Evening Dresses </b> </caption> 
<tr>
<th><a href="orders.php"><img src="D1.jpg" alt="dress 1"  width="250" height="300"></a> Gray long evening dress <br> price=750 L.E  </th>
<th><a href="orders.php"><img src="D2.jpg" alt="dress 2" width="250" height="300"></a> A long cashmere dress with its jibouna  for engagement <br> price=1000 L.E</th>
<th><a href="orders.php"><img src="D3.jpg" alt="dress 3" width="250" height="300"></a> Cashmere cup dress <br> price=1220 L.E </th>
</tr>

<tr>
<th><A href="orders.php"><img src="D4.jpg" alt="dress 4" width="250" height="300"></a> Long red dress <br> price=2500 L.E </th>
<th><A href="orders.php"><img src="D5.jpg" alt="dress 5" width="250" height="300"></a> Long baby blue cup dress <br> price=1800 L.E </th>
<th><A href="orders.php"><img src="D6.jpg" alt="dress 6" width="250" height="300"></a> Short white dress (below the knee) off shoulders <br> price=1500 L.E </th>
</tr>

</table>

<hr/> <br><br><br><br><br><br>

<table width="600" height="550" cellspacing="150" >

<caption style="font-size:60; color:brown"> <b> Winter Clothes </b> </caption>

<tr>
<th><A href="orders.php"><img src="W1.jpg" alt="complete set" width="250" height="300"></a> Complete set (pants, pullover and jacket) <br> price=1500  L.E </th>
<th><A href="orders.php"><img src="W2.jpg" alt="full set" width="250" height="300"></a> Full set (light jeans and white and black striped T-shirt and cardigan) <br> price=1250 L.E</th>
<th><A href="orders.php"><img src="W3.jpg" alt="jacket" width="250" height="300"></a> Beige jacket <br> price=400 L.E </th>
</tr>

<tr>
<th><A href="orders.php"><img src="W4.jpg" alt="Basic" width="250" height="300"></a> White basic <br> price=150  L.E</th>
<th><A href="orders.php"><img src="W5.jpg" alt="cardigan" width="250" height="300"></a> Long cardigan <br> price=250  L.E</th>
<th><A href="orders.php"><img src="W6.jpg" alt="coat" width="250" height="300"></a> Long cardigan <br> price=1200  L.E</th>
</tr>
</table>

<hr/> <br><br><br><br><br><br>

<table width="600" height="550" cellspacing="150" >

<caption style="font-size:60; color:brown"> <b> Summer clothes </b> </caption>

<tr>
<th><A href="orders.php"><img src="S1.jpg" alt="Blouse" width="250" height="300"></a> Brown blouse <br> price=250 L.E  </th>
<th><A href="orders.php"><img src="S2.jpg" alt="cardigan" width="250" height="300"></a> Long summer cardigan <br>  price=750 L.E</th>
<th><A href="orders.php"><img src="S3.jpg" alt="T-shirt" width="250" height="300"></a> White T-shirt <br> price=150 L.E </th>
</tr>

<tr>
<th><A href="orders.php"><img src="S4.jpg" alt="Red blouse" width="250" height="300"></a> Red blouse <br> price=175  L.E</th>
<th><A href="orders.php"><img src="S5.jpg" alt="wide leg pants" width="250" height="300"></a> Fabric beige wide leg pants <br> price=350  L.E</th>
<th><A href="orders.php"><img src="S6.jpg" alt="Hot short" width="250" height="300"></a> Casual Hot Shorts <br> price=120  L.E</th>
</tr>
</table>

<hr/> <br><br><br><br><br><br>

<table width="600" height="550" cellspacing="150" >

<caption style="font-size:60; color:brown"> <b> Kids clothes </b> </caption>

<tr>
<th><A href="orders.php"><img src="K1.jpg" alt="Jeep and blouse" width="250" height="300"></a> Burgundy jeep with white blouse <br> price=500   L.E</th>
<th><A href="orders.php"><img src="K2.jpg" alt="Kajol dress" width="250" height="300"></a> Kajol dress( blue , pink ) <br> price=120 L.E</th>
<th><A href="orders.php"><img src="K3.jpg" alt="checkered dress" width="250" height="300"></a> checkered dress ( red and black ) <br> price=250  L.E</th>
</tr>

<tr>
<th><A href="orders.php"><img src="K4.jpg" alt="Hot short and blouse" width="250" height="300"></a> Hot short and blue blouse <br> price=300 L.E </th>
<th><A href="orders.php"><img src="K5.jpg" alt="Tshirt and jeep" width="250" height="300"></a> White Tshirt and pink jeep <br> price=350  L.E</th>
<th><A href="orders.php"><img src="K6.jpg" alt="Suit" width="250" height="300"></a> White Suit <br> price=400 L.E </th>
</tr>
</table>

<footer style="background-color:pink;text-align:center;">
<P> I hope you find the product you want <br> </P>
<h3> Hotline 19058 </h3>
</footer>

</body>
</html>