<?php
declare(strict_types=1);
function power(float $val, int $pow): float|string
{
    if ($pow < 0) {
        return "Прошу использовать в качестве показателя степени целое неотрицательное число";
    };
    if ($pow === 0) {
        return 1;
    }
    if ($pow === 1) {
        return $val;
    }
    return $val * power($val, --$pow);
}


echo power(-2, 9);