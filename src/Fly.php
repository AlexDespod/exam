<?php
namespace Src;

use Error;

class Fly
{
    private $list = [];

    public function __construct()
    {
        $this->list[] = new Ticket(1,"E","Kolesnyk");
        $this->list[] = new Ticket(2,"E","Guu");
        $this->list[] = new Ticket(3,"E","Puu");
        $this->list[] = new Ticket(1,"B","King");
        $this->list[] = new Ticket(3,"B","Quine");
        $this->list[] = new Ticket(2,"S","Foo");
        $this->list[] = new Ticket(3,"S","Bar");
        $this->list[] = new Ticket(6,"S","Fin");
        $this->list[] = new Ticket(1,"S","Fic");
    }

    public function getNameById(int $id = null)
    {
        
        if ($id != null){
            foreach($this->list as $item){

                if($item->getId() == $id){
                    return $item->getName();
                }
            }
        }
        throw new Error("no arguments given!!!");
    }

    public function countOfTicketsByClass(string $var = null)
    {
        if ($var != null){
            
            $count = 0;

            foreach($this->list as $item){

                if($item->getFlyClass() == $var){

                    $count++;
                }
            }
            return $count;
        }
        throw new Error("no arguments given!!!");
    }
}
