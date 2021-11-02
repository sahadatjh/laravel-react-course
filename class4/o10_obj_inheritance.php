<?php
class First
{
    private $name = "Sahadat Hossain";
    protected function FuncFirst()
    {
        echo "Hi {$this->name}, How are you!!!";
    }
}

class Second extends First
{
    public function FuncSecond()
    {
        // return "I am from second class\n";
        $this->FuncFirst();
    }
}


// $one = new First();
// $one->FuncFirst();


$obj2 = new Second();
echo $obj2->FuncSecond();
