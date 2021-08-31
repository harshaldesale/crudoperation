<?php
require 'connection.php'; 
// print_r($_POST);
// print_r($_FILES);
if (empty($_POST['pr_name'])) {
	echo "Enter product name";
}
else if (empty($_POST['pr_cat'])) {
	echo "Enter category";
}
else if (empty($_POST['pr_qt'])) {
	echo "Enter quantity";
}
else if (empty($_POST['pr_desc'])) {
	echo "Enter Product description";
}
else if (empty($_FILES['path']['name'])) {
	echo "Please select image";
}
else if ($_FILES['path']['size']>10*10*10*10*10*10*10) {
	echo "Filesize allow upto 1MB";
}
elseif ($_FILES['path']['type']=="image/jpeg"||$_FILES['path']['type']=="image/gif"||$_FILES['path']['type']=="image/png") {
	$tmp=$_FILES['path']['tmp_name'];
	$name="products/".time().$_FILES['path']['name'];
	$imgpath=$name;
	$re=move_uploaded_file($tmp,$name);
	if ($re) {
		$name=$_POST['pr_name'];
		$category=$_POST['pr_cat'];
		$quantity=$_POST['pr_qt'];
		$desc=$_POST['pr_desc'];
		$str="insert into product (name,category,quantity,decription,image) values('$name','$category','$quantity','$desc','$imgpath')";
		$res=mysqli_query($conn,$str) or die(mysqli_error($conn));
		?>
		<script type="text/javascript">
			alert("Product Added");
		</script>
		<?php
	}
}
else{
	echo "Invalid product";
}
?>