<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""method="post">
    Name:
    <input type="text" name="name">
    <br>
    id:
    <input type="text"name="id">
    salary:
    <input type="text"name="salary">
    <br>
    <button type="submit">submit</button>


    </form>
</body>
</html>





<?php
include 'db.php';

if($_SERVER["REQUEST_METHOD"]==="POST"){
$name=$_POST["name"];

$id=$_POST["id"];

$salary=$_POST["salary"];


$sql=$conn->prepare("insert into emp values(?,?,?)");
$sql->bind_param('sid',$name,$id,$salary);

}

if ($sql->execute()) {
   
} else {
    echo "not inserted..";
}





?>