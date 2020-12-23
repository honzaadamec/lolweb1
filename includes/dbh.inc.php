<?php

$servername = "192.168.1.65";
$dBUsername = "root";
$dBPassword = "25256314789C";
$dBname = "loginsystem";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBname);

if (!$conn){
  die("Connection failed: ".mysqli_connect_error());
}
