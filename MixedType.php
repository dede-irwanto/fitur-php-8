<?php

class MixedType
{
    public function example(mixed $data): mixed
    {
        if (is_array($data)) {
            return [];
        } elseif (is_string($data)) {
            return "string";
        } else if (is_bool($data)) {
            return true;
        }
        return null;
    }
}

$example = new MixedType();
var_dump($example->example(false));