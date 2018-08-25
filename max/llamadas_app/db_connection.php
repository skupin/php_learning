<?php


$connection = mysqli_connect('localhost', 'root', '', 'llamadas');
if(!$connection) {
	die("Database connection failed " . mysqli_error($connection));
}