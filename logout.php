<?php
// logout.php

// Include the configuration file
include('config.php');

// Reset OAuth access token
$google_client->revokeToken();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect the user to login.php
header('location: login.php');
exit();
?>
