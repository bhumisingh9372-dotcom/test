<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""method="post">

    id:
    <input type="text"name="id"><br>
    name:
    <input type="text"name="name">
    <button type="submit">submit</button>
    </form>
    
</body>
</html>

<?php

include 'Q1_db.php';

if($_SERVER["REQUEST_METHOD"]==="POST"){
$id=$_POST["id"];
$name=$_POST["name"];


$result=$conn->prepare("update employee set name=? where id=?");
$result->bind_param('si',$name,$id);

if($result->execute()){
    echo"data updated";

}
else{
    echo "not updated";
}
}

?>
