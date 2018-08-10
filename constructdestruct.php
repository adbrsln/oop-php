<?php
class MyClass
{
  public $prop1 = "I'm a class property!";
  
  public function __construct(){
    echo 'The Class ',__CLASS__,'is created <br />';
  }
  public function __destruct(){
      echo 'the class is destroyeasdadd';
  }

  public function setProperty($newval)
  {
      $this->prop1 = $newval;
  }
 
  public function getProperty()
  {
      return $this->prop1 . "<br />";
  }
}
 
// Create two objects
$obj = new MyClass;
echo $obj->getProperty();
echo "End of file.<br />";


?>