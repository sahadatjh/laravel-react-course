<?php
class Person
{
    public $name = "Bangladesh";
}

$one = new Person();
$two = clone $one;


$two->name = "Faruq Hossen";

print_r($one);
print_r($two);
