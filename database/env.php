<?php 

// *Database host
define('DB_HOST', 'localhost');

// *Database Username
define('DB_USER', 'root');

// *Database password
define('DB_PSK', '');

// *Database name
define('DB_NAME', 'eco_dashboard_account');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PSK, DB_NAME);