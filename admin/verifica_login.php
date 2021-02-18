<?php
session_start();
if(!$_SESSION['usuario']) {
	header('Location: ../admin/index.php');
}
?>