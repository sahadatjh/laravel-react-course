<?php

class MyClass
{
    public function __construct($one, $two)
    {
        echo "This is {$one} and {$two}, amra valo asi\n";
        echo $this->name;
        echo $this->email;
    }
    public $name = "Sahadat Hossain\n";
    public $email = "sahadat@gmail.com\n";
}


$something = new MyClass('Ami', 'apni');
