<?php
include 'connection.php';  
$id=$_GET['id'];
$str="delete from product where id='$id'";
$res=mysqli_query($conn,$str) or die(mysqli_error($conn));
if ($res) {
	?>
	<script type="text/javascript">
		alert("Product delete successfully....");
	</script>
	<?php
	header("location:delete.php");
}
?>