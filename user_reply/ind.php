<?php

$con= new mysqli("localhost","root","namrata","wtsapp");

if($con->connect_error)
{
	echo("<script>alert('Error');</script>");
	
}


?>
