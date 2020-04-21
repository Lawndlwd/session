<?php
session_start();

session_destroy();
$_SESSION['name'] = null;
header('Refresh:2 , url=login.php');