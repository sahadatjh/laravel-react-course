<?php

class Person
{
    // public $name = "sujon";
    static $name = "sujon\n";

    static function set_password()
    {
        return "Password hosse 12133\n";
    }
    static function myName()
    {
        return self::$name;
    }
}
// $ami = new Person();
// var_dump($ami);
// echo $ami->name;


echo Person::$name;


$pass = new Person();
echo $pass->set_password();


echo Person::set_password();

echo Person::myName();
