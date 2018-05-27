<?php 

class Player {  
    public $name;  
    public $age;  
    public $salary;
    public $job;  
      
    public function __construct($name, $age, $salary, $job)    
    {    
        $this->name = $name;  
        $this->age = $age;  
        $this->salary = $salary;
        $this->job = $job;  
    }   
}  

?>