<?php

$something = new stdClass();
$something->name = "sahadat";
// echo $something->name;

class Person
{
    public $username = "sujon";
    public $password = "123456";

    public function myFunc()
    {
        global $something;
        return $something->name;
    }
}

$two = new Person();
echo $two->myFunc();
