<!-- destroy the session and go to index page-->
<?php
session_start();

if(isset($_SESSION['user'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("Location: index.php");

} else {
	header("Location: index.php");
}

?>