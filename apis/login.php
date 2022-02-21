<?php
include 'conn.php';
$username=$_POST['username'];
$password=$_POST['password'];

$r=mysqli_query($con,"select * from user where name='$username' and password='$password'");
if(mysqli_num_rows($r) > 0 )
{
	$arr['f']=true;
	$arr['t']=true;
	
}

else{
	$arr['f']=false;
}
echo json_encode($arr);
?>