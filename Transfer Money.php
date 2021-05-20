<?php
session_start();
$con=mysqli_connect('localhost','root','','banking');
$q="select custname from customer";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Transfer Money</title>
	<link rel="stylesheet" href="css/button.css">
	<script>
		 function random_function()
            {
                var a=document.getElementById("input").value;
				if(a==="Roshan Kumar"){
				 var arr=["Bhushan Joshi","Vivek Patil","Sarthak Desai","Krishna Yadav","Suresh betal","Naval Sarode","Sujay Patil","Bhuvan Chaudhari","Balvant Sote"];
				 }
				 else if(a==="Bhushan Joshi"){
					var arr=["Roshan Kumar","Vivek Patil","Sarthak Desai","Krishna Yadav","Suresh betal","Naval Sarode","Sujay Patil","Bhuvan Chaudhari","Balvant Sote"];
				}
				else if(a==="Vivek Patil"){
					var arr=["Roshan Kumar","Bhushan Joshi","Sarthak Desai","Krishna Yadav","Suresh betal","Naval Sarode","Sujay Patil","Bhuvan Chaudhari","Balvant Sote"];
				}
				else if(a==="Sarthak Desai"){
					var arr=["Roshan Kumar","Bhushan Joshi","Vivek Patil","Krishna Yadav","Suresh betal","Naval Sarode","Sujay Patil","Bhuvan Chaudhari","Balvant Sote"];
				 }
				 else if(a==="Krishna Yadav"){
					var arr=["Roshan Kumar","Bhushan Joshi","Vivek Patil","Sarthak Desai","Suresh betal","Naval Sarode","Sujay Patil","Bhuvan Chaudhari","Balvant Sote"];
				 }
				 else if(a==="Suresh betal"){
					var arr=["Roshan Kumar","Bhushan Joshi","Vivek Patil","Sarthak Desai","Krishna Yadav","Naval Sarode","Sujay Patil","Bhuvan Chaudhari","Balvant Sote"];
				 }
				 else if(a==="Naval Sarode"){
					var arr=["Roshan Kumar","Bhushan Joshi","Vivek Patil","Sarthak Desai","Krishna Yadav","Suresh betal","Sujay Patil","Bhuvan Chaudhari","Balvant Sote"];
				 }
				 else if(a==="Sujay Patil"){
					var arr=["Roshan Kumar","Bhushan Joshi","Vivek Patil","Sarthak Desai","Krishna Yadav","Suresh betal","Naval Sarode","Bhuvan Chaudhari","Balvant Sote"];
				 }
				 else if(a==="Bhuvan Chaudhari"){
					var arr=["Roshan Kumar","Bhushan Joshi","Vivek Patil","Sarthak Desai","Krishna Yadav","Suresh betal","Naval Sarode","Sujay Patil","Balvant Sote"];
				 }
				 else if(a==="Balvant Sote"){
				 var arr=["Roshan Kumar","Bhushan Joshi","Vivek Patil","Sarthak Desai","Krishna Yadav","Suresh betal","Naval Sarode","Sujay Patil","Bhuvan Chaudhari"];
				 }
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
	</script>	
</head>
<body>
	<header>
	<div class="wrapper">
	     <div class="logo">
		  <img src="logo.jpg">
	     </div>
	     <ul class="area">
		<li><a href="Home.php">Home</a></li>
		<li><a href="viewall.php">View all Customers</a></li>
		<li><a href="transaction.php">Transfer History</a></li>
		<li><a href="contact.php">Contact Us</a></li>
	</ul>
	</div>
	<br><br><br><br><br>
	<div class="head">
	     <h1>Transfer Money</h1>
		 <br><br>
	<div class="center">
	<form action="updatecredit.php" method="post">
		<label for="sender" align="left">Senders Name: &nbsp;</label>
		<select id="input" name="sender"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function()">
			<option  selected>Select Name</option>
			<option value="Roshan Kumar">Roshan Kumar</option>
			<option value="Bhushan Joshi">Bhushan Joshi</option>
			<option value="Vivek Patil">Vivek Patil</option>
			<option value="Sarthak Desai">Sarthak Desai</option>
			<option value="Krishna Yadav">Krishna Yadav</option>
			<option value="Suresh betal">Suresh betal</option>
			<option value="Naval Sarode">Naval Sarode</option>
			<option value="Sujay Patil">Sujay Patil</option>
			<option value="Bhuvan Chaudhari">Bhuvan Chaudhari</option>
			<option value="Balvant Sote">Balvant Sote</option>
		</select><br><br>
		<label for="receiver" align="left">Receiver Name:&nbsp;</label>
		<select id="output" name="receiver"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function1()">
			<option>Select Name</option>
		</select><br><br>
		<label for="transfer" align="left">Amount: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
		<input type="number"  name="transfer" style="font-size: 12pt; height: 20px; width:290px;" align="middle" required><br><br>
		<div class="button1">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" onMouseOver="this.style.color='red'"onMouseOut="this.style.color='#28048a'"type="submit" name="submit" value="Transfer" style="height:40px; width:100px;">
		</div>
	</form> 
	</div>
		</header>
</body>
</html>