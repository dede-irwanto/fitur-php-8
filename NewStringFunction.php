<?php
var_dump(str_contains("Dede Irwanto", "Dede"));
var_dump(str_contains("Dede Irwanto", "Irwanto"));
var_dump(str_contains("Dede Irwanto", "Joko"));

var_dump(str_starts_with("Dede Irwanto", "Dede"));
var_dump(str_starts_with("Dede Irwanto", "Irwanto"));
var_dump(str_starts_with("Dede Irwanto", "Joko"));

var_dump(str_ends_with("Dede Irwanto", "Irwanto"));
var_dump(str_ends_with("Dede Irwanto", "Dede"));
var_dump(str_ends_with("Dede Irwanto", "Joko"));
