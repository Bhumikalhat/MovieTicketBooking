<?php
$servername = 'localhost';
$username = 'root';
$password = '';
// <-- your actual root password
$dbname = 'dbmovies';
// <-- your database name
$port = 3307;
// <-- your XAMPP MySQL port

// Create connection
$conn = mysqli_connect( $servername, $username, $password, $dbname, $port );

// Check connection
if ( !$conn ) {
    die( 'Connection failed: ' . mysqli_connect_error() );
}
echo 'Connected successfully';
?>
