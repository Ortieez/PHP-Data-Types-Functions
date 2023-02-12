<?php

function intCheck(int $var) {
    echo $var.' '.gettype($var).PHP_EOL;
}

function floatCheck(float $var) {
    echo $var.' '.gettype($var).PHP_EOL;
}

function boolCheck(bool $var) {
    echo $var.' '.gettype($var).PHP_EOL;
}

function stringCheck(string $var) {
    echo $var.' '.gettype($var).PHP_EOL;
}

function arrayCheck(array $var) {
    echo $var.' '.gettype($var).PHP_EOL;
}

function objectCheck(object $var) {
    echo $var.' '.gettype($var).PHP_EOL;
}

function callableCheck(callable $var) {
    echo $var.' '.gettype($var).PHP_EOL;
}

$testValues = [
    1,
    1.1,
    true,
    false,
    'string',
    [1, 2, 3],
    null,
];


echo '-----------intCheck-----------'.PHP_EOL;
foreach ($testValues as $testValue) {
    try {
        intCheck($testValue);
    } catch (TypeError $e) {
        echo $e->getMessage().PHP_EOL;
    }
}

echo '-----------floatCheck-----------'.PHP_EOL;
foreach ($testValues as $testValue) {
    try {
        floatCheck($testValue);
    } catch (TypeError $e) {
        echo $e->getMessage().PHP_EOL;
    }
}

echo '-----------boolCheck-----------'.PHP_EOL;
foreach ($testValues as $testValue) {
    try {
        boolCheck($testValue);
    } catch (TypeError $e) {
        echo $e->getMessage().PHP_EOL;
    }
}

echo '-----------stringCheck-----------'.PHP_EOL;
foreach ($testValues as $testValue) {
    try {
        stringCheck($testValue);
    } catch (TypeError $e) {
        echo $e->getMessage().PHP_EOL;
    }
}

echo '-----------arrayCheck-----------'.PHP_EOL;
foreach ($testValues as $testValue) {
    try {
        arrayCheck($testValue);
    } catch (TypeError $e) {
        echo $e->getMessage().PHP_EOL;
    }
}

echo '-----------objectCheck-----------'.PHP_EOL;
foreach ($testValues as $testValue) {
    try {
        objectCheck($testValue);
    } catch (TypeError $e) {
        echo $e->getMessage().PHP_EOL;
    }
}

echo '-----------callableCheck-----------'.PHP_EOL;
foreach ($testValues as $testValue) {
    try {
        callableCheck($testValue);
    } catch (TypeError $e) {
        echo $e->getMessage().PHP_EOL;
    }
}
