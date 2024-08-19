<?php
function mathOperation(float $arg1, float $arg2, string $operation): float|string
{
    $operation = strtolower($operation);
    if ($operation === 'add') {
        return $arg1 + $arg2;
    } else if ($operation === 'subtract') {
        return $arg1 - $arg2;
    } else if ($operation === 'multiply') {
        return $arg1 * $arg2;
    } else if ($operation === "divide") {
        if ($arg2 === 0.0) {
            return "Ошибка деления на ноль";
        } else {
            return $arg1 / $arg2;
        }
    } else return "Укажите корректное название операции";
}

echo mathOperation(2, 7, 'add') . PHP_EOL;
echo mathOperation(2, 7, 'subtract') . PHP_EOL;
echo mathOperation(2, 7, 'multiply') . PHP_EOL;
echo mathOperation(2, 0, 'divide') . PHP_EOL;
echo mathOperation(2, 7, 'square') . PHP_EOL;
