$(document).ready(function(){$("#order_form").submit(function(event){event.preventDefault();$.ajax({url:"ajax_order.php",type:"POST",data:{name:$("#name").val(),phone:$("#phone").val(),email:$("#email").val(),project:$("#project").val(),complete_date:$("#complete_date").val(),city:$("#city").val(),description:$("#description").val()},beforeSend:function(){$("#order_btn").html("<i class='fa fa-spinner fa-spin'></i>");},success:function(resp){toastr["success"](resp);},error:function(err){toastr["danger"]("Sorry! Error Occured!!");},complete:function(){$("#order_btn").html("<i class='fa fa-send'></i>");$('#name,#phone,#email,#project,#complete_date,#city,#description').val('');}});});});