<?php
//connecting to the database
$db_conn=mysqli_connect('localhost','root','','um.com');
if(!$db_conn)
{
	echo "Sorry!! Unable to connect to the database..<br>";
	die();
}

$name=@mysqli_real_escape_string($db_conn,$_POST['name']);
$email=@mysqli_real_escape_string($db_conn,$_POST['email']);
$phone=@mysqli_real_escape_string($db_conn,$_POST['phone']);

if(!empty($name))
{
	//checking email
	if(!empty($email))
	{
		//checking phone
		if(!empty($phone))
		{
			//inserting into the database
			$sql="INSERT INTO users(name,email,phone) VALUES('$name','$email','$phone')";
			$result=mysqli_query($db_conn,$sql);
			if($result)
			{
				echo "Hurray!! Data inserted..";
			}
			else
			{
				echo "Sorry! Error occured..";
			}
		}
		else
		{
			echo "Sorry! Phone cannot be empty.";
		}
	}
	else
	{
		echo "Sorry! E-mail cannot be empty.";
	}
}
else
{
	echo "Sorry! Name cannot be empty.<br>";
}


?>