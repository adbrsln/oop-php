<?php 
class Database{
    private $connection;
    public function connect_db(){
        $this->connection = mysqli_conenct('localhost','root','','demo');
        if(mysqli_connect_error()){
            die("Database connection failed".mysqli_connect_error());
        }
    }
    public function sanitize($var){
        $return = mysqli_real_escape_string($this->connection, $var);
        return $return;
    }
    public function create($fname,$lname,$email,$gender,$age){
        $sql = "INSERT INTO 'crud' (firstname,lastname,email,gender,age) VALUES ('$fname','$lname','$email','$gender','$age')";
        $res = mysqli_query($this->connection,$sql);
        if($res){
            return true;
        }else {
            return false;
        }
    }
    public function read($id=null){
        $sql = "SELECT * FROM `crud`";
        if($id){ $sql .=" WHERE id = $id";}
        $res = mysqli_query($this->connection,$sql);
        return $res;
    }

    
}

$database = new Database();
$database -> connect_db();

?>