<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'ticcat'; // Nama Database

$category = 'Action';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}

$movie = 'SELECT * FROM movie';
$movieCategory = 'SELECT * FROM movie_category';
$movieTop = 'SELECT * FROM movie_top';

$movie = mysqli_query($conn, $movie);
$movieCategory = mysqli_query($conn, $movieCategory);
$movieTop = mysqli_query($conn, $movieTop);

// $rowMovie = mysqli_fetch_array($movie);
