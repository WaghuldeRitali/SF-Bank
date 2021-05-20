<?php
session_start();
$con=mysqli_connect('localhost','root','','banking');
$q="select *from statement";
$result=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Transfer History</title>
		<link rel="stylesheet" href="css/button.css">
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
	<br><br><br><br>
	<div class="head">
		<h1>Transfer History</h1>
		<br><br>
		<table class="flat-table-1">
			<tr>
				<th>Sender</th>
				<th>Receiver</th>
				<th>Balance</th>
			</tr>
			<tr>
			
			<?php while($row = $result->fetch_assoc()) { ?>
			
			<tr>
				<td><?php echo $row["sender"]; ?></td>
				<td><?php echo $row["receiver"]; ?></td>
				<td><?php echo $row["balance"]; ?></td>
			</tr>
			<?php } ?>
		</table>
			</div>
		<br>
		<br>
		</header>	
	</body>
</html>