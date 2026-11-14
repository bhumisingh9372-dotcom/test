<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""method="post">
    name:
    <input type="text" name="name">
    <br>
    Age:
    <input type="text" name="age">
    <br>
    Gender:
    <input type="text" name="gender" >
    



    </form>
    
</body>
</html>


<?php
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $name=$_POST["name"];
    $age=$_POST["age"];
    $gender=$_POST["male"];
    $gender=$_POST["female"];
    


}


?>