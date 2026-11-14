
<?php
include 'Q1_db.php';

$result=$conn->query("select * from employee");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1>
    <tr>
        <td>id</td>
        <td>name</td>
        <td>department</td>
        <td>salary</td>
    </tr>
 
    <?php 
    while ($row=$result->fetch_assoc()) { 
?>
<tr>
    <td><?php echo $row['id'] ?></td>
    <td><?php echo $row['name'] ?></td>
    <td><?php echo $row['department'] ?></td>
    <td><?php echo $row['salary'] ?></td>
</tr>

<?php } ?>
    </table>
</body>
</html>


