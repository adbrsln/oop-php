<?php 
require_once('database.php');
$id = $_GET['id'];
$res = $database->read($id);
$r = mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="process.php" method="post">
    <input type="text" name="fname" id="" placeholder="first name" value="<?=$r['fname'];?>">
    <input type="text" name="lname" id="" placeholder="Last name" value="<?=$r['lastname'];?>">
    <input type="email" name="email" id="" placeholder="Email" value="<?=$r['email'];?>">
    <input type="radio" name="gender" id="" value = "male" checked>Male</input>
    <input type="radio" name="gender" id="" value = "female" checked>feMale</input>
    
    <select name="age" id="">
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
    </select>

    <input type="submit" value="submit" value="submit">
    </form>
</body>
</html>