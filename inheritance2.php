<?php 
class Human {
    protected $name;
    
    public function __construct($name){
     $this->name = $name;
    }
   }
class Person extends Human {
    /* no constructor, adapted the parent constructor */
    public function getName(){
        /*Will return name property defined in parent class*/
        return $this->name; 
    }
}


//constructor function inherited from the parent
$person = new Person('Kelly');
echo $person->getName();
?>