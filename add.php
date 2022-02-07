<!DOCTYPE html>
<html>
<head>
	<title>Add product</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="project.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
<div class="container pt-4">
	<div class="row">
	<div class="col-lg-8 m-auto d-block bg-dark">
		<a href="index.php" class="btn btn-info float-left">Back</a>
		<a href="logout.php" class="float-right"></a>
		<h1 class="text-center text-success pt-4 pb-2">Add Product Form</h1>
		<form id="add_form" class="bg-light">
			<div class="form-group">
				<label>Product Name:</label>
				<input type="text" name="pr_name" class="form-control" placeholder="Product name">
				<span id="username" class="text-danger font-weight-bold"></span>
			</div>
			<div class="form-group">
				<label>Product category</label>
				<input type="text" name="pr_cat" class="form-control" placeholder="product category">
				<span id="Email" class="text-danger font-weight-bold"></span>
			</div>
			<div class="form-group">
				<label>Product quantity</label>
				<input type="text" name="pr_qt" class="form-control" placeholder="Product quantity">
				<span id="Password" class="text-danger font-weight-bold"></span>
			</div>
			<div class="form-group">
				<label>Product description:</label>
				<textarea name="pr_desc" class="form-control" placeholder="product description"></textarea>  
				<span id="CPassword" class="text-danger font-weight-bold"></span>
			</div>
			<div class="form-group">
				<label>Product image:</label>
				<input type="file" name="path" class="form-control">  
				<span id="CPassword" class="text-danger font-weight-bold"></span>
			</div>
			<input type="button" value="Add" class="btn btn-success btn-add">
		</form>
		<div class="add_msg"></div>
	</div>
</div>
</div>
</body>
</html>
