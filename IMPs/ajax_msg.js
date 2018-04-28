$(document).ready(function()
{
	///when form submit
	$("#msg_form").submit(function(event){

		event.preventDefault();
	
	//using ajax to fetch the data

		$.ajax({
			url:"ajax_msg.php",
			type:"POST",
			data:{
				email_add:$("#email_add").val(),
				msg:$("#msg").val()
			},
			beforeSend:function()
			{
				$("#msg_send_btn").html("<i class='fa fa-spinner fa-spin'></i>")
			},
			success:function(resp)
			{
				toastr["success"](resp);

			},
			error:function(err)
			{
				toastr["danger"]("Sorry! Error Occured!!");
			},
			complete:function()
			{
				$("#msg_send_btn").html("<i class='fa fa-send'></i>")
			}
		});

	});
});