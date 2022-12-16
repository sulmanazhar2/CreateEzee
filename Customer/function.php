<?php
require_once('connection.php');
function getRealUserIp(){
	switch (true){
    	case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
        case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
        case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
        default : return $_SERVER['REMOTE_ADDR'];
    }
}



function items(){
	global $conn;
	$ip_add=getRealUserIp();
	 
	 $sql="select * from cart where IP_address = '$ip_add'";
	 $result=$conn -> query ($sql);
	 $row = $result -> fetch_assoc();
	 $count_items = mysqli_num_rows($result);
	 
	 echo $count_items;
}
?>