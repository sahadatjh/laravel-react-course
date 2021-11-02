<?php
class Person
{
    // public $name = "Sujon";
    private $name = "Sujon";

    public function nam()
    {
        $abcd = $this->name;
        return $abcd;
    }
}

$manush = new Person();
// echo $manush->name;
echo $manush->nam();
