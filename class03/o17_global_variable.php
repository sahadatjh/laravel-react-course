<?php
$a = "Somethings\n";

function anything()
{
    // global $a;
    // echo $a;

    echo $GLOBALS['a'];


    global $b;
    $b = "globla variable";
}

anything();
echo $b;
