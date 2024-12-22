<?php

/*
function callback($function) {
    $function();
}

callback(function() {
    echo 'php';
});
*/

/*
class Power
{
    public static function on($function)
    {
        $function();
        echo "\n";
    }
}

Power::on(function() {
    echo 'anonymous functions';
});
*/

/*
class TwoFunctions
{
    public static function abc($first, $second)
    {
        $first();
        echo "\n";
        $second();
        echo "\n";
    }
}

TwoFunctions::abc(function() {
    echo 'one';
}, function() {
    echo 'two';
});
*/

/*
class CallableFunction
{
    public static function abc($function)
    {
        if(is_callable($function))
        {
            $function();
            echo "\n";
        } else {
            echo "It's not a function.";
        }
    }
}

CallableFunction::abc(function() {
    echo 'function';
});

CallableFunction::abc('text');
*/

/*
class CallableFunction
{
    public static function abc($function)
    {
        if(is_callable($function))
        {
            return $function();
        }
        return (string) $function;
    }
}

CallableFunction::abc(function() {
    echo 'function';
});

echo "\n";

echo CallableFunction::abc('text');
echo "\n";

echo CallableFunction::abc(123);
echo "\n";
*/

function parOuImpar($numbers, $callback) {

    foreach ($numbers as $number) {
        $callback($number);
    }
}

$nums = [];
$array_of_numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16];

parOuImpar($array_of_numbers, function($number) use (&$nums){
    $nums[] = $number . " - " . ($number % 2 == 0 ? 'true' : 'false');
});

print_r($nums);
// var_dump($nums);
