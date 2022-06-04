<?php

class UnionTypes
{
    //    property union type
    public string|int|bool|array $data;

    //    argument union type
    public function example2(string|array $data): void
    {
        if (is_array($data)) {
            echo "Array" . PHP_EOL;
        } elseif (is_string($data)) {
            echo "String" . PHP_EOL;
        }

    }

    public function example3(string|array $data): string|array
    {
        if (is_array($data)) {
            $data = ["array"];
        } elseif (is_string($data)) {
            $data = "string";
        }

        return $data;
    }
}

$example = new UnionTypes();
$example->data = "Dede";
var_dump($example);
$example->data = 1;
var_dump($example);
$example->data = true;
var_dump($example);
$example->data = [];
var_dump($example);

$example2 = new UnionTypes();
$example2->example2("Dede");
$example2->example2([]);

$example3 = new UnionTypes();
$example3->example3("Dede");
$example3->example3([]);

