<?php 

include 'navbar.php';
$foodid=$_GET['id'];
?>

<div class="container">
	<div class="col-md-6 offset-3" style="background-color:white;border-radius: 12px;padding: 10px; ">
		<h1>Add New tag  </h1>
		<hr>

		<form action="addtag.php?id=<?php echo $foodid; ?>" method="post" >
			<input type="text" placeholder="tag " class="form-control" name="name"><br>

		<input type="submit" value="Save" class="btn btn-warning btn-lg" name="btn"><br>
		</form>



	</div>
</div>

<?php
include 'conn.php';

$name=isset($_POST['name'])?$_POST['name']:'';
if(isset($_POST['btn']))
{


	

$r=mysqli_query($con,"insert into food_tags(name,food_id)values('$name','$foodid')");
if(isset($r)  )
{
	echo'
<script>alert("add tag successfully");</script>
	';
}

else{
	echo'
<script>add category failed</script>
	';
}
	}


?>