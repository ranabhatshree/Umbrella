<?php
//starting the session here
session_start();
//declaring the session variable here
$_SESSION['message']="";

	//setting the date
	date_default_timezone_set("Asia/Kathmandu");

//connecting to the database
$db_conn= mysqli_connect('localhost','root','learningjava','umbrellanepal');


//if not connection

if(!$db_conn)
{
	echo "Sorry! Unable to connect to the database" ;
	die();
}