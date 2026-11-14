<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""method="post">
        id:
        <input type="text"name="id">
        <button type="submit">submit</button>
    </form>
</body>
</html>


<?php
include 'Q1_db.php';

if($_SERVER["REQUEST_METHOD"]==="POST"){
$id=$_POST["id"];

$result=$conn->prepare("delete from employee where id=?");
$result->bind_param('i',$id);

if($result->execute()){
    

}
else{
    echo "not deleted";
}
}

?>