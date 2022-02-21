<?php
include 'conn.php';
$key=$_POST['keyword'];


$r=mysqli_query($con,"select * from food_tags where word='$key'");
if(mysqli_num_rows($r) > 0 )
{
while($row=	mysqli_fetch_array($r))
{
	$r1=mysqli_query($con,"select * from food where id='$row['id']'");

	$arr['food_data']=$r1;

}

	
}

else{
	$arr['food_data']=null;
}
echo json_encode($arr);
?>