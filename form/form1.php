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
					<h4>Name Of The Department:<input type="text" style="border-bottom:1px solid black;;padding:15px;" value="<?php echo $dept; ?>" /></h4>  <h4>For the period::<input style="padding:15px;" type="date" name="date" /></h4>
					</div>
					
					
					<h2 style="text-align:center">DEPARTMENT RECEIPTS AND PAYMENTS STATEMENT</h2>
					
					
					<h3 style="text-align:center">A. DEPARTMENT INCOME</h3>
					
					
					<p>I. Money collected from Students</p>
					
					<table>
    <thead>
        <tr>
            <th>S. No</th>
            <th>Heading</th>
            <th>UG / PG</th>
            <th>Amount per Student</th>
            <th>Total no. of Students</th>
            <th>Total Amount collected

Rs.</th>
          
        </tr>
    </thead>                                    
    <tbody>
        <tr>
            <td>1</td>
            <td><select name="h" >
    <option value="Association Fee">Association Fee collected</option>
    <option value="Book Money">Book money collected</option>
    <option value="Record Money">Record money collected</option>
    <option value="Lab Coat / Blazer">Money collected for Lab Coat / Blazer etc.</option>
    <option value="Certificate / Diploma Course">Money collected for certificate / Diploma course</option>
    <option value="Industrial Visit">Industrial Visit Money Collected</option>
    <option value="Other">Money collected for any other purpose (Specify)</option>
</select></td>
            <td><select name="deg" >
    <option value="UG">UG</option>
    <option value="PG">PG</option>
   
</select></td>
            <td><input type="text"  name="amnt" id="amnt" onKeyUp="updateTotal()" /></td>
            <td><input type="text"  name="st" id="st" onKeyUp="updateTotal()"/></td>
            <td><input type="text"  name="total" id="total" readonly/></td>
           
        </tr>
      
		
      
    </tbody>
</table>

				<div style="width:300px;margin:50px auto;"> 
			
			<input type="submit" name="btn" style="padding:10px 20px;background:#006600;border-radius:5px;color:#FFFFFF;font-weight:700;" />
			<input type="reset" style="padding:10px 20px;background:red;border-radius:5px;color:#FFFFFF;font-weight:700;" value="Reset" />
			<a href="index1.php" style="padding:10px 20px;background:blue;border-radius:5px;color:#FFFFFF;font-weight:700;">Back</a>
			
			</form>
			
			</div>	
					
					
					</div>

<script>
function updateTotal() {
    var amnt = parseFloat(document.getElementById('amnt').value) || 0;
    var st = parseFloat(document.getElementById('st').value) || 0;
    var total = amnt * st;
    document.getElementById('total').value = total; // Limit to 2 decimal places
}
</script>


</body>
</html>
