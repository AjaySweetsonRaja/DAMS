<?php 

include('dbconnect.php');
session_start();

 $dept=$_SESSION['dept'];
extract($_POST);




$qry=mysqli_query($conn,"SELECT SUM(total) AS total FROM income WHERE dept='$dept'");

$rw=mysqli_fetch_array($qry);




if(isset($_POST['btn']))
{






$qry=mysqli_query($conn,"insert into ex values('','$dept','$date','$h','$tot')");



if($qry){


?>
		 <script> alert('Expenses Added successfully')
window.location.href=("form2.php");</script>
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
						
						
						
						
							<h2 style="text-align:center">RECEIPTS AND PAYMENTS For the period:: <input type="date" name="date"  style="padding:15px;"/></h2>
						
						
						
						
						
						
						<table>
    <thead>
        <tr>
            <th>S. No</th>
            <th>Particulars</th>
            <th>Receipts Rs.</th>
    
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>I</td>
            <td style="text-align:left;font-weight:800;">Opening Balance Amount</td>
            <td colspan="2"><input type="text" name='bal' value="<?php echo $rw['total'];?>"/></td>
            
        </tr>
        <tr>
            <td>II</td>
            <td colspan="3" style="text-align:left;font-weight:800;">Income</td>
   
        </tr>
        <tr>
            <td>1</td>
            <td style="text-align:left"><select name="h">
    <option value="Money collected from Students">Money collected from Students</option>
    <option value="Money collected from Participants for organizing Conference / workshop/ Skill development / Seminar etc">Money collected from Participants for organizing Conference / workshop/ Skill development / Seminar etc</option>
    <option value="Money received from Management">Money received from Management</option>
    <option value="Money received from Alumni">Money received from Alumni</option>
    <option value="Fixed deposit money">Fixed deposit money</option>
    <option value="Any other (Specify)">Any other (Specify)</option>
</select></td>
            <td><input type="text" name="tot" /></td>
         
        </tr>
       	
      
       
    </tbody>
</table>
						
						
						<div style="width:300px;margin:50px auto;"> 
			
			<input type="submit" name="btn" style="padding:10px 20px;background:#006600;border-radius:5px;color:#FFFFFF;font-weight:700;" />
			<input type="reset" style="padding:10px 20px;background:red;border-radius:5px;color:#FFFFFF;font-weight:700;" value="Reset" />
			<a href="index1.php" style="padding:10px 20px;background:blue;border-radius:5px;color:#FFFFFF;font-weight:700;">Back</a>
			
			
			
			</div>	
						
						
						
						
			</form>			
						
						
						
						</div>

                 
</body>
</html>
