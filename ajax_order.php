<?php 
//including the file
include('db_connect.php');


//gets the ip address
	function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

//getting data
$name=@mysqli_real_escape_string($db_conn,$_POST['name']);
$phone=@mysqli_real_escape_string($db_conn,$_POST['phone']);
$email=@mysqli_real_escape_string($db_conn,$_POST['email']);
$project=@mysqli_real_escape_string($db_conn,$_POST['project']);
$complete_date=@mysqli_real_escape_string($db_conn,$_POST['complete_date']);
$city=@mysqli_real_escape_string($db_conn,$_POST['city']);
$description=@mysqli_real_escape_string($db_conn,$_POST['description']);
$ip_address=get_client_ip();
$request_date=date('Y-m-d H:i:s');

//inserting into the database
$sql="INSERT INTO orders(name,phone,email,project,complete_date,city,description,ip_address,request_date) VALUES('$name','$phone','$email','$project','$complete_date','$city','$description','$ip_address','$request_date')";
$result=mysqli_query($db_conn,$sql);
if($result)
{
	echo "Thankyou! Your order has been sent. We will contact you within 24 hrs.<br>";
}
else
{
	echo "Sorry! Error Occured!!";
}