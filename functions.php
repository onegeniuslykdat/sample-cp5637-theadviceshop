<?php

function getFullName($fname, $lname)
{
    return $fname . ", " . $lname;
}

function getResult($stringOfNumbers, $operation)
{
    $arr = str_getcsv($stringOfNumbers);
    $result = 0;
    if ($operation == '*') {
        $result = 1;
    }
    foreach ($arr as $num) {
        if ($operation == '+') {
            $result += $num;
        } else {
            $result *= $num;
        }
    }
    return $result;
}
