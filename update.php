<?php
include 'connection.php';
$id=$_GET['id'];
$str="select * from product where id='$id'";
$res=mysqli_query($conn,$str) or die(mysqli_error($conn));
$ans=mysqli_fetch_assoc($res);

?>
<!DOCTYPE html>
<html>
<head>
	<title>update product</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="project.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
<div class="container pt-4">
	<div class="row">
	<div class="col-lg-8 m-auto d-block bg-light">
		<h1 class="text-center text-success pt-4 pb-2">Update Product Form</h1>
		<form action="" method="post" class="bg-light">
			<div class="form-group">
				<label>Product Name:</label>
				<input type="text" value="<?php echo $ans['name']; ?>" name="pr_name" class="form-control" placeholder="Enter product name">
				<span id="username" class="text-danger font-weight-bold"></span>
			</div>
			<div class="form-group">
				<label>Product category</label>
				<input type="text" value="<?php echo $ans['category'];?>" name="pr_cat" class="form-control" placeholder="product category">
				<span id="Email" class="text-danger font-weight-bold"></span>
			</div>
			<div class="form-group">
				<label>Product quantity</label>
				<input type="text" value="<?php echo $ans['quantity']; ?>" name="pr_qt" class="form-control" placeholder="product quantity">
				<span id="Password" class="text-danger font-weight-bold"></span>
			</div>
			<div class="form-group">
				<label>Product description:</label>
				<textarea name="pr_desc" class="form-control" placeholder="<?php echo $ans['decription']; ?>"></textarea>  
				<span id="CPassword" class="text-danger font-weight-bold"></span>
			</div>
			<div class="form-group">
				<label>Product image:</label>
				<input type="file" name="path" class="form-control">  
				<span id="CPassword" class="text-danger font-weight-bold"></span>
			</div>
			<input type="submit" name="update" value="update">
		</form>
		<div class="update_msg"></div>
	</div>
</div>
<?php
if (isset($_POST['update'])) {
	$str="UPDATE `product` SET `name`='$_POST[pr_name]',`category`='$_POST[pr_cat]',`quantity`='$_POST[pr_qt]',`decription`='$_POST[pr_desc]' WHERE id='$id'";
	$res=mysqli_query($conn,$str) or die(mysqli_error($conn));
	if ($res) {
		echo "Updated successfully";
		header("location:edit.php");
	}
}
?>
</div>
</body>
</html>