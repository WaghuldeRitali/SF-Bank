<?php 
session_start();
$con=mysqli_connect('localhost','root','','banking');

$q="select * from customer ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);


?>
<html>
  <head>
	<title>View All Customer</title>
	<link rel="stylesheet" href="css/style3.css">
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
	<div class="head">
	     <h1>View All Customer</h1>
	      <br>
	<div>
		 <table  width="750" height="500" cellpadding="0" cellspacing="0" frame="box">
		 <thead>
			<th>NO</th>
			<th>Name</th>
			<th>Email</th>
			<th>Balance</th>
			<th></th>
		</thead>
		<tbody>
		<tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 1</td>
			<td><?php echo  $row["custname"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["balance"]; ?></td>
			<td>
				<form action="user.php" method="post"  class="view">
					<button class="button1" type="submit" name="custname" value="Roshan Kumar">View</button>
				</form>
			</td>
		</tr>
		<tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 2</td>
			<td><?php echo  $row["custname"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["balance"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1" type="submit" name="custname" value="Bhushan Joshi">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 3</td>
			<td><?php echo  $row["custname"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["balance"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1" type="submit" name="custname" value="Vivek Patil">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 4</td>
			<td><?php echo  $row["custname"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["balance"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1" type="submit" name="custname" value="Sarthak Desai">View</button>
				</form>
			</td>
   

        </tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 5</td>
			<td><?php echo  $row["custname"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["balance"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1" type="submit" name="custname" value="Krishna Yadav">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 6</td>
			<td><?php echo  $row["custname"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["balance"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1" type="submit" name="custname" value="Suresh Betal">View</button>
				</form>
			</td>
        </tr>
        <tr>
			<?php  
     
				$row=mysqli_fetch_array($result);
			?>
			<td> 7</td>
			<td><?php echo  $row["custname"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["balance"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1"type="submit" name="custname" value="Naval Sarode">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php   
				$row=mysqli_fetch_array($result);
			?>
			<td> 8</td>
			<td><?php echo  $row["custname"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["balance"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1"type="submit" name="custname" value="Sujay Patil">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 9</td>
			<td><?php echo  $row["custname"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["balance"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1"type="submit" name="custname" value="Bhuvan Chaudhari">View</button>
				</form>
			</td>
        </tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 10</td>
			<td><?php echo  $row["custname"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["balance"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="button1"type="submit" name="custname" value="Balvant Sote">View</button>
				</form>
			</td>
		</tr>
		</tbody>
	</table>
	</div>
	</header>
  </body>
</html>