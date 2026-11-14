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
<input type="text" name="name"><br>
department:
<input type="text"name="department"><br>
salary:
<input type="text"name="salary">

<button type="submit">submit</button>




    </form>
</body>
</html>

<?php
include 'Q1_db.php';

if($_SERVER["REQUEST_METHOD"]==="POST"){
$id=$_POST["id"];
$name=$_POST["name"];
$department=$_POST["department"];
$salary=$_POST["salary"];

$result=$conn->prepare("insert into employee values(?,?,?,?)");
$result->bind_param('issd',$id,$name,$department,$salary);

if($result->execute()){
    

}
else{
    echo "not inserted";
}

}
?>