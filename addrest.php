<?php 

include 'navbar.php';
?>

<div class="container">
	<div class="col-md-6 offset-3" style="background-color:white;border-radius: 12px;padding: 10px; ">
		<h1>Add New Restaurant </h1>
		<hr>

		<form action="addrest.php" method="post" enctype="multipart/form-data">
			<input type="text" placeholder="name " class="form-control" name="name"><br>
		<input type="text" placeholder="address" class="form-control" name="address"><br>
		<input type="text" placeholder="phone" class="form-control" name="phone"><br>
		<input type="file" placeholder="image" class="form-control" name="img"><br>
		<input type="submit" value="Save" class="btn btn-warning btn-lg" name="btn"><br>
		</form>



	</div>
</div>

<?php
include 'conn.php';
if(isset($_POST['btn']))
{

	$name=isset($_POST['name'])?$_POST['name']:'';
$address=isset($_POST['address'])?$_POST['address']:'';
$phone=isset($_POST['phone'])?$_POST['phone']:'';
$imagename=isset($_FILES['img']['name'])?$_FILES['img']['name']:'';
$imagefile=isset($_FILES['img']['tmp_name'])?$_FILES['img']['tmp_name']:'';

move_uploaded_file($imagefile, "uploads/$imagename");
$r=mysqli_query($con,"insert into restaurant(name,address,phone,image)values('$name','$address','$phone','$imagename')");
if(isset($r)  )
{
	echo'
<script>alert("add rest successfully");</script>
	';
}

else{
	echo'
<script>alert("add rest failed");</script>
	';
}
}

?>