<?php
function validate(string $value)
{
    if (trim($value) == "") {
        throw new Exception("Invalid string");
    }
}

try {
    validate("    ");
} catch (Exception $e) {
    echo "Invalid" . PHP_EOL;
}