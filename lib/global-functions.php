<?php
function findElement(array $array, $keyFilter, $keyValue)
{
    foreach ($array as $key => $item) {
        if (array_key_exists($keyFilter, $item) && $item[$keyFilter] === $keyValue) {
            return $item;
        }
    }
    return false;
}