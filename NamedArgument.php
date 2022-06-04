<?php
function sayHello(string $first, string $midle, string $last):void{
    echo "Hello $first $midle $last".PHP_EOL;
}
// without named argument
sayHello("Nazeefa", "Qotrunnada","Salsabila");

// with named argument
sayHello(last: "Salsabila", first: "Nazeefa", midle: "Qotrunnada");