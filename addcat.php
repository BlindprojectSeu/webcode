<?php 

include 'navbar.php';
?>

<div class="container">
	<div class="col-md-6 offset-3" style="background-color:white;border-radius: 12px;padding: 10px; ">
		<h1>Add New category  </h1>
		<hr>

		<form action="addcat.php" method="post" >
			<input type="text" placeholder="name " class="form-control" name="name"><br>

		<input type="submit" value="Save" class="btn btn-warning btn-lg" name="btn"><br>
		</form>



	</div>
</div>

<?php
include 'conn.php';
if(isset($_POST['btn']))
{

	$name=isset($_POST['name'])?$_POST['name']:'';

$r=mysqli_query($con,"insert into category(name)values('$name')");
if(isset($r)  )
{
	echo'
<script>alert("add category successfully");</script>
	';
}

else{
	echo'
<script>alert("add category failed");</script>
	';
}
}

?>