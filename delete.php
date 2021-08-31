<?php  
include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>delete product</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="project.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
	<a href="index.php" class="btn btn-info float-left mt-2">Back</a>
<div class="col-lg-12">
			<a href="logout.php" class="float-right mt-2"></a>
		</div>
<div class="container">
	<h1 class="text-center text-danger pt-3 pb-3">Product List</h1>
	<div class="row">
	<table class="table bordered">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>category</th>
			<th>quantity</th>
			<th>Description</th>
			<th>Image</th>
			<th>update</th>
		</tr>
		
		<?php  
		$str="select * from product";
		$res=mysqli_query($conn,$str) or die(mysqli_error($conn));
		if ($res->num_rows>0): 
			while ($ans=mysqli_fetch_assoc($res)):
				?>
		<tr>
			<td><?php echo $ans['id']; ?></td>
			<td><?php echo $ans['name']; ?></td>
			<td><?php echo $ans['category']; ?></td>
			<td><?php echo $ans['quantity']; ?></td>
			<td><?php echo $ans['decription']; ?></td>
			<td><img src="<?php echo $ans['image'];?>" width="100";height="100";></td>
			<td><a href="deleteaction.php?id=<?php echo $ans['id'];?>" class="btn btn-danger">delete</a></td>
		</tr>
				<?php
			endwhile;
		endif;
		?>
		
	</table>
	</div>
</div>
</body>
</html>