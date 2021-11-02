<?php


class Person
{
    public $name = "Sujon";
    public $username = "Sujon4g";
    public $password = "S213213";

    public function Login()
    {
        // echo "login hosse";
        return "login hosse";
    }
}


// $information = new Person();

// $information->name = "Bangladesh";
// echo $information->name;


$info = new Person();
// $info->Login();
echo $info->Login();
