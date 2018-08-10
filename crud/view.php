<?php 

require_once('database.php');
$res = $database->read();
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
    <table>
    <thead>
        <tr>
            <th>#</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php while($r = mysqli_fetch_assoc($res)){?>
            <th scope="row"><?=$r['id'];?></th>
            <td><?=$r['firstname']." ". $r['lastname'];?></td>
            <td><?=$r['email'];?></td>
            <td><?=$r['gender'];?></td>
            <td><?=$r['age'];?></td>
            <td>
                <a href="update.php?id=<?=$r['id'];?>">Edit></a>
                <a href="delete.php?id=<?=$r['id'];?>">Delete</a>
            </td>
            <?php }?>
        </tr>
    </tbody>
    </table>
</body>
</html>