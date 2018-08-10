<?php
class bapak
{
  public $prop1 = "Aku lah si bapak";
  
  public function __construct(){
    echo __CLASS__,' dicipta <br />';
  }
  public function __destruct(){
      echo __CLASS__.' di bunuh';
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
 
class anak extends bapak{
    public function __construct()
    {
        parent::__construct(); // Call the parent class's constructor
        echo "A new constructor in " . __CLASS__ . ".<br />";
    }
    public function newmethod(){
        echo "aku adalah " . __CLASS__." </br>";
    }
}

$objek1 = new anak;

echo $objek1 -> newmethod();
echo $objek1 ->getProperty();

?>