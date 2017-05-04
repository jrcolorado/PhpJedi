<?php

class Pessoa{
    private $name;
    private $lastname;
    private $age;
    
   public function setName($name) {
        $this->name = $name;
        return $this;
    }

   public function setLastname($lastname) {
        $this->lastname = $lastname;
         return $this;
    }

    public function setAge($age) {
        $this->age = $age;
    }
    
   public function getFullName() {
        return $this->name.' '.$this->lastname.' '.$this->age.' years';
    }
    
   }

$pessoa = new Pessoa();

$pessoa->setName('joao')->setLastname('ferreira')->setAge(45);
echo "Nome: ".$pessoa->getFullName();









