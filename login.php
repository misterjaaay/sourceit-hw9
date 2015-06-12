<?php
require_once 'function.php';

$login = trim ( $_POST ['login'] );
$password = trim ( $_POST ['password'] );
$login = stripslashes($login);
$password = stripslashes($password);
$login = mysql_real_escape_string($login);
$password = mysql_real_escape_string($password);
$login_date = date ( "Y:m:d h:m:s" );
if (isset ( $_POST ['submit'] )) {
	$conn = mysqli_connect ( SERVERNAME, USERNAME, PASSWORD, DBNAME ) or die ( "Connection failed: " . mysqli_connect_error () );
		$sql = "SELECT * FROM users WHERE login = '{$login}' AND password = '".sha1 ( 'ololo' . $password )."' ";
	$result = mysqli_query ( $conn, $sql );
	$count = mysqli_num_rows ( $result );
	echo ' <br />';
	
	if ($count == 1) {
		$cookie_name = 'Username';
		$cookie_value = $login;
		setcookie("Username", $cookie_value, time() + (86400 * 30), "/php/hw8/"); // 86400 = 1 day
		if(isset($_COOKIE["$cookie_name"])) {
			header("Location: http://paragliding.kh.ua/php/hw8");
		}
		$sql = "UPDATE users
				SET	 update_at= '" . $login_date . "'
				Where `login` = '".$login."'";
		$result = mysqli_query ( $conn, $sql );
			
		 
	} else {
		echo 'Wrong username or password <br />';
		echo "Try again or <a href='index.php'>Register</a>";
	}
	mysqli_close ( $conn );
}
require_once 'header.php';	
require_once 'footer.php';