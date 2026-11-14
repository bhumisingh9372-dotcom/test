<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    Name:
    <input type="text" name="name">
    <br>
    Id:
    <input type="text" name="id">
    <br>
    Salary:
    <input type="text" name="salary">
    <button type="submit">submit</button>

    </form>
    
</body>
</html>




<?php
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $name=$_POST["name"];
    $id=$_POST["id"];
    $salary=$_POST["salary"];

    echo "Name:$name <br>";
    echo "Id:$id<br>";
    echo "salary:$salary";



}





?>