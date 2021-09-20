<?php

$username = "root";
$password="";
$server ="localhost";
$db = "customerdetails";


$con = mysqli_connect($server,$username,$password,$db);

if(!$con)
{
  die("No connection->".mysqli_connect_error());
}
// else
// {
//     // echo "No connection";
//     die("no connection".mysqli_connect_error());//exit
// }

?>