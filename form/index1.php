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


<div class="main" >
<a href="form1.php">Income</a>
<a href="form2.php">Expense</a>
<a href="form3.php">Data</a>
<a href="index.php">Logout</a>



</div>

<div class="bg">
 </br>  </br>          

<br />  
</div>

</body>
</html>
