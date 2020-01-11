<?php
session_start();
session_destroy();
if (isset($_SESSION['nome'])) {
	echo $_SESSION['nome'];
	session_destroy();
}



?>