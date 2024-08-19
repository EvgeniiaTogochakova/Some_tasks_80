<?php
function mathOperationSwitch(float $arg1, float $arg2, string $operation): float|string
{
    $operation = strtolower($operation);
    switch ($operation) {
        case "add":
            return $arg1 + $arg2;
        case "subtract":
            return $arg1 - $arg2;
        case "multiply":
            return $arg1 * $arg2;
        case "divide":
            if ($arg2 === 0.0) {
                return "Ошибка деления на ноль";
            } else {
                return $arg1 / $arg2;
            }
        default:
            return "Укажите корректное название операции";
    }
}

echo mathOperationSwitch(2, 7, 'add') . PHP_EOL;
echo mathOperationSwitch(2, 7, 'subtract') . PHP_EOL;
echo mathOperationSwitch(2, 7, 'multiply') . PHP_EOL;
echo mathOperationSwitch(2, 0, 'divide') . PHP_EOL;
echo mathOperationSwitch(2, 7, 'square') . PHP_EOL;
