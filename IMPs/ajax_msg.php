<?php 
//including the file
include('db_connect.php');

//if not connection

if(!$db_conn)
{
	echo "Sorry! Unable to connect to the database" ;
	die();
}

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
$email_add=@mysqli_real_escape_string($db_conn,$_POST['email_add']);
$msg=@mysqli_real_escape_string($db_conn,$_POST['msg']);
$ip_address=get_client_ip();
$sent_date=date('Y-m-d H:i:s');
//inserting into the database
$sql="INSERT INTO message(email_add,msg,ip_address,sent_date) VALUES('$email_add','$msg','$ip_address','$sent_date')";
$result=mysqli_query($db_conn,$sql);
if($result)
{
	echo "Thankyou for your kind message. We respect your feelings.<br>";
}
else
{
	echo "Sorry! Error Occured.Please Try once.<br>";
}
