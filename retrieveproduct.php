
<?php 
include 'Connection1.php';
$query = "select * from retproduct";
$records=mysqli_query($con,$query);
 //fetch data from product
 while ($data=mysqli_fetch_array($records))
{
 ?>
 <table style="text-align: center;"  width="250"; height="200" ;  border="4"; cellpadding="10"; cellspacing="8" ; >
<tr>
<td> <?php echo $data['id'];?> </td>
<td> <?php echo $data['productname'];?> </td>
<td> <?php echo $data['color'];?> </td>
<td> <?php echo $data['price'];?> </td>
<td> <img src=" <?php echo $data['image'];?> "width="300" height="350"/> </td><br>
<br>
</tr>
</table>
<?php 

    }

?>
