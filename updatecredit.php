<?php
session_start();
$con=mysqli_connect('localhost','root','','banking');
$name1=$_POST['sender'];
$q="select balance from customer where custname='$name1'";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
$var=$row['balance'];
$from=$_POST['sender'];
$to=$_POST['receiver'];
$q1="select balance from customer where custname='$to'";
$result1=mysqli_query($con,$q1);
$row=mysqli_fetch_array($result1);
$var1=$row['balance'];
session_destroy();
if ( $var >= $_POST["transfer"] )
{
    $sub=$var-$_POST["transfer"];
    $q="update customer set balance='$sub' where custname='$from' ";
    $result=mysqli_query($con,$q);
    $sum=$var1+$_POST["transfer"];
    $q="update customer set balance='$sum' where custname='$to' ";
    $result=mysqli_query($con,$q);
	$c=$_POST["transfer"];
	$q="insert into statement(sender,receiver,balance)
		values('$from','$to',$c)";
	$result=mysqli_query($con,$q);
    
        $message="Successful Transfer";
   echo"<script type='text/javascript'>alert('$message');
   </script>";
    include 'viewall.php';
    
}
else
{
    $message="Insufficient Balance";
   echo"<script type='text/javascript'>alert('$message');
   </script>";
    
    include 'viewall.php';

}
?>