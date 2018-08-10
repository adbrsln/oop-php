<?php 
require_once('database.php');

function __construct(){
    $this->connect_db();
}

if(isset($_POST) && !empty($_POST)){
    $fname = $database ->sanitize($_POST['fname']);
    $lname = $database ->sanitize($_POST['lname']);
    $email = $database ->sanitize($_POST['email']);
    $gender = $_POST['gender'];
    $age = $_POST['age'];

    $res= $database -> create($fname,$lname,$email,$gender,$age);
    if($res){
        echo 'Successfully inserted data';
    }else {
        echo 'failed to insert data';
    }
}
?>