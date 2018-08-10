<?php 
class myClass{
    public $prop1 ="im a class property";
    //setter
    public function setProperty($val){
        $this->prop1 = $val;
    }
    //getter
    public function getProperty(){
        return $this->prop1."<br/>";
    }
}

$obj = new myClass;
echo $obj->prop1; //accessing variable/property of class myClass
?>