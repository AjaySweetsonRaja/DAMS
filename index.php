<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();

if(isset($_POST['btn']))
{



$_SESSION['dept']=$dept;


header("location:index1.php");


}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>



<style>
*{
margin:0;
padding:0;
}
.head{
display:flex;
justify-content:space-around;
align-items:center;
background: #164164;
color:white;
}
.main{
display:flex;
background: #000;
width:100%;
justify-content:space-around;

}

a{
padding:20px;
color:#FFFFFF;
font-weight:800;
text-decoration:none;
}



.bg{
height:600px;
background-image:url(admin.jpg);
background-repeat:no-repeat;
background-size:cover;

}
input{
padding:10px;

}
</style>
</head>

<body>


<div class="head">
<img src="logo.png" height="150px" width="150px" style="border-radius:50%;"/>
<h1>BISHOP HEBER COLLEGE(Autonomous)</h1>
</div>



<div class="bg">
 </br>  </br>          
  <form id="form1" name="form1" method="post" action="">
	   <table  border="0" align="center" style="margin:200px auto;padding:40px;background:transparent;backdrop-filter:blur(20px);box-shadow:0 0 10px rgba(0,0,0,0.2);width:250px;height:250px;">
         <tr>
           <td colspan="2" rowspan="1"><div align="center" class="style1"><strong><font size="+1">Choose Department</font> </div></td>
		 </tr>
			<tr>
		<td width="50%">&nbsp;</td>
		    <td width="50%">&nbsp;</td>
	  		</tr>
         </tr>
         <tr>
           <td height="31" align="center"><span class="style2"><strong> </strong></span></td>
           <td><label>
            <select name="dept" style="padding:15px;">
			   <option value="ALL">ALL</option>
 <option value="BSC CS">BSC CS</option>
	<option value="BCA">BCA</option>
	<option value="BSC MATHS">BSC MATHS</option>
	<option value="BSC PHYSICS">BSC PHYSICS</option>

<option value="BSC CHEMISTRY">BSC CHEMISTRY</option>

	
	</select>
           </label></td>
         </tr>
         
         <tr>
           <td>&nbsp;</td>
		    
           <td rowspan="2"><label>
             <input style="margin-left:60px;" name="btn" type="submit" id="btn" value="Login" />
			     <td>&nbsp;</td>
           
           </label></td>
         </tr>
  </table>
</form>
<br />  
</div>

</body>
</html>
