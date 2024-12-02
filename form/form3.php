<?php 

include('dbconnect.php');
session_start();

$dept=$_SESSION['dept'];
extract($_POST);


if(isset($_POST['btn']))
{






$qry=mysqli_query($conn,"insert into income values('','$dept','$date','$h','$amnt','$st','$total')");



if($qry){


?>
		 <script> alert('Income Added successfully')
window.location.href=("form1.php");</script>
<?php


}








}
?>

















<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>


<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: center;
    }
</style>
</head>

<body>



<div style="display:flex;margin:0;padding:0;width:1000px;margin:0 auto;height:200px;">
<img src="images/logo.png"   style="width:200px;height:200px;" />
<div>
<p style="text-align:center;line-height:0;">DEANERY OF PROJECTS</p>
<p style="text-align:center;line-height:0;">BISHOP HEBER COLLEGE (AUTONOMOUS)</p>
<p style="text-align:center;line-height:0;font-family:cursive;">Ranked 39 th at National Level by MHRD through NIRF 2019</p>
<p style="text-align:center;line-height:0;font-family:cursive;">(Nationally Reaccredited at the A Grade by NAAC with the CGPA of 3.69 out of 4)</p>

<p style="text-align:center;line-height:0;font-family:cursive;">Recognized by UGC as College of Excellence</p>
<p style="text-align:center;line-height:0;">Tiruchirappalli, Tamil Nadu</p>



</div>


</div>
<hr />

<form method="post">


                    <div>
					<h2 style="text-align:center">DEPARTMENT ACCOUNTS AUDIT TEMPLATE</h2>
					
					
					<div style="display:flex;justify-content:space-around;">
					<h4>Name Of The Department:<input type="text" style="border-bottom:1px solid black;;padding:15px;" value="<?php echo $dept; ?>" /></h4>  
					</div>
					
				


		
			
			
			<h1>INCOME:</h1>
			
			
			
			 <table width="100%" border="2" align="center">
  <tr>
    <th scope="col">S.NO</th>
    <th scope="col">DATE</th>
    <th scope="col">HEADING</th>
	  <th scope="col">AMOUNT</th>
    <th scope="col">STUDENT COUNT</th>
	<th scope="col">TOTAL</th>
	
    
	  
  </tr><?php $i=1;
  
$qry1 = mysqli_query($conn, "SELECT SUM(total) AS tot FROM income WHERE dept='$dept'");

$row1=mysqli_fetch_array($qry1);
  
  
  
  $qry=mysqli_query($conn,"select * from income where dept='$dept'");
while($row=mysqli_fetch_array($qry)){
?>  <tr>
    <td><?php echo $i;?></td>
   <td><?php echo $row['date']?></td>
   <td><?php echo $row['h']?></td>
   <td><?php echo $row['amnt']?></td>
   <td><?php echo $row['st']?></td>
    <td><?php echo $row['total']?></td>
	

   
    

  </tr>
<?php

$i++; }  ?>

  <tr>
    <th scope="col"></th>
    <th scope="col"></th>
    <th scope="col"></th>
	
	    <th scope="col"></th>
    <th scope="col">TOTAL INCOME</th>
	<th scope="col"><?php echo $row1['tot']?></th>
	
    
	  
  </tr>


</table>
			
			
			<br><br><br>
			
			
			
			<h1>Expense:</h1>
			
			
			
			 <table width="100%" border="2" align="center">
  <tr>
    <th scope="col">S.NO</th>
    <th scope="col">DATE</th>
    <th scope="col">HEADING</th>
	
	<th scope="col">TOTAL</th>
	
    
	  
  </tr><?php $i=1;
  
$qry2 = mysqli_query($conn, "SELECT SUM(tot) AS tot FROM ex WHERE dept='$dept'");

$row2=mysqli_fetch_array($qry2);
  
  
  
  $qry=mysqli_query($conn,"select * from ex where dept='$dept'");
while($row=mysqli_fetch_array($qry)){
?>  <tr>
    <td><?php echo $i;?></td>
   <td><?php echo $row['date']?></td>
   <td><?php echo $row['h']?></td>

    <td><?php echo $row['tot']?></td>
	

   
    

  </tr>
<?php

$i++; }  ?>

  <tr>
    <th scope="col"></th>
    <th scope="col"></th>
   
	
    <th scope="col">TOTAL EXPENSE</th>
	<th scope="col"><?php echo $row2['tot']?></th>
	
    
	  
  </tr>


</table>
			
		<h1>Balance:<?php echo $bal= $row1['tot']-$row2['tot']; ?> </h1>	
			
			
			
			
			
			
			
			<br><br><br><br><br><br>
			
			
		
			<button id="printButton" style="padding:10px 20px;background:red;border-radius:5px;color:#FFFFFF;font-weight:700;">Printme</button><a href="index1.php" style="padding:10px 20px;background:blue;border-radius:5px;color:#FFFFFF;font-weight:700;">Back</a>
			
			</form>
			
			
					
					
					</div>
					
					
					
					
					
					

<script>
function updateTotal() {
    var amnt = parseFloat(document.getElementById('amnt').value) || 0;
    var st = parseFloat(document.getElementById('st').value) || 0;
    var total = amnt * st;
    document.getElementById('total').value = total; // Limit to 2 decimal places
}
</script>




<script>
document.getElementById("printButton").addEventListener("click", function() {
    window.print(); // This will open the print dialog

    // After printing, redirect the user to the same page
    setTimeout(function() {
        window.location.reload();
    }, 500); // Adjust the delay if needed
});
</script>





</body>
</html>
