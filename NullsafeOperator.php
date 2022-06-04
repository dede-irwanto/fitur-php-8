<?php

class Address
{
    public ?string $country;
}

class User
{
    public ?Address $address;
}

function getCountry(?User $user): ?string
{
    // manual cek null
    if ($user != null) {
        if ($user->address->country != null) {
            return $user->address->country;
        }
    }
    return null;
}

echo getCountry(null) . PHP_EOL;

function getCountry2(?User $user): ?string
{
    // Nullsafe operator
    return $user?->address?->country;
}

echo getCountry2(null) . PHP_EOL;