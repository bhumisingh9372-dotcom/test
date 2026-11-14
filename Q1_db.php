<?php
$servername="localhost";
$username="root";
$password="";
$dbname="k2_under";

$conn=new mysqli($servername,$username,$password,$dbname);

if(!$conn){
    echo "not connected";
}
else{
    echo "connected";
}
?>