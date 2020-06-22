<?php
include ("Dataconnect.php");

	$query1= "create table if not exists intern(
		   id int primary key not null auto_increment,
		   username varchar(225) not null,
		   point varchar(225) not null,
		   date date		

)";

mysqli_query($connect,"$query1");
	if($query1) {echo "succesfully created reg table.<br>";} else{echo 'could not create profile'.mysqli_error($connect);}







?>