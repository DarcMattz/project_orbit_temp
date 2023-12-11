<?php
$host = "localhost";
$uname = "root";
$pwd = "";
$dbase = "project_orbit";
$conn = new mysqli($host, $uname, $pwd, $dbase);

if(!$conn){
    die("Connection could not establish ");
}

?>