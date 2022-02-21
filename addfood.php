<?php 


include 'navbar.php';

?>

<div class="container">
	<div class="col-md-6 offset-3" style="background-color:white;border-radius: 12px;padding: 10px; ">
		<h1>Add New food </h1>
		<hr>

		<form action="addfood.php" method="post" enctype="multipart/form-data">
			<input type="text" placeholder="food name " class="form-control" name="name"><br>
		<input type="text" placeholder="description" class="form-control" name="description"><br>
		<input type="text" placeholder="price" class="form-control" name="price"><br>
	select category :	<select class="form-control" name="cat">
			<?php
			include 'conn.php';
			$q=mysqli_query($con,"select * from category");
			while($row=mysqli_fetch_array($q))
			{
				echo '
				<option value="'.$row['name'].'">'.$row['name'].'</option>
				';
			}

			?>
		</select><br>
		<input type="file" placeholder="image" class="form-control" name="img"><br>
		<input type="submit" value="Save" class="btn btn-warning btn-lg" name="btn">

	
		</form>



	</div>
</div>

<?php

if(isset($_POST['btn']))
{

	$name=isset($_POST['name'])?$_POST['name']:'';
$description=isset($_POST['description'])?$_POST['description']:'';
$price=isset($_POST['price'])?$_POST['price']:'';
$imagename=isset($_FILES['img']['name'])?$_FILES['img']['name']:'';
$imagefile=isset($_FILES['img']['tmp_name'])?$_FILES['img']['tmp_name']:'';

move_uploaded_file($imagefile, "uploads/$imagename");
$r=mysqli_query($con,"insert into product(name,description,price,image)values('$name','$description','$price','$imagename')");
if(isset($r)  )
{
	echo'
<script>alert("add food successfully");</script>';


header("Location: addtag.php?id=".$con->insert_id."");
}

else{
	echo'
<script>alert("add food failed");</script>';
}
}


ob_end_flush();
?>