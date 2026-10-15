<?php

function printHeader()
{
    echo "<h3>SID: C113187221</h3>";
    echo "<h3>Name: 傅瑞賢</h3>";
    echo "<h3>EX04</h3>";
}

printHeader();
$test = 15;
var_dump($test);
unset($test);
var_dump($test);