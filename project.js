$(document).ready(function(){
	$(".btn-add").click(function(){
		var obj=document.getElementById('add_form');
		var ans=new FormData(obj);
		$.ajax({
			type:"post",
			url:"add_action.php",
			data:ans,
			contentType:false,
			processData:false,
			success:function (response) {
				$(".add_msg").html(response);
				// $("#add_form")[0].reset();		
			}
		})
	})
})