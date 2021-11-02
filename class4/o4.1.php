<?php
function myFunc()
{
    $number = 10;
    if ($number != 20) {
        throw new Exception("eita 20 er soman na !!!");
    }
}

myFunc();
