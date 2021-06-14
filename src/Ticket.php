<?php
namespace Src;

use Error;

class Ticket
{
    private $id;

    private $flyClass;

    private $lastName;

    public function __construct(int $id,string $flyClass,string $lastName)
    {
        $this->id = $id;
        $this->lastName = $lastName;
        $this->flyClass = $flyClass;
    }

    public function getName()
    {
        
            return $this->lastName;
       
    }
    public function getId()
    {
      
            return $this->id;
      
    }
    public function getFlyClass()
    {
      
            return $this->flyClass;
      
    }
}
