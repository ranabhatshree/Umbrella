<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/mdb.min.css">
</head>
<body>

<div class="container" style="margin-top: 40px;">
	<div class="row">
		<div class="col-md-8">
			<form class="order_form">
				<div class="md-form">
			    <i class="fa fa-envelope prefix"></i>
			    <input type="email" id="form9" class="form-control validate" required/>
			    <label for="form9" data-error="Invalid email" data-success="Valid e-mail address">Type your email</label>
			</div>

			<div class="md-form">
			    <i class="fa fa-lock prefix"></i>
			    <input type="password" id="form10" class="form-control validate" required/>
			    <label for="form10">Type your password</label>
			</div>

			<button type="submit" class="btn btn-primary" id="send_btn">Send</button>
			</form>
		</div><!--close  col-->
	</div><!--close row -->
</div><!--close container -->

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
<script type="text/javascript">
	$(document).ready(function()
	{
		$(".order_form").on('submit',function(event){
			event.preventDefault();
		});
	});
</script>
</body>
</html>

