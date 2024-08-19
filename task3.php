<?php
$regionsCities = [
    "Московская область" => [
        "Москва", "Зеленоград", "Клин"
    ],
    "Ленинградская область" => [
        "Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"
    ],
    "Рязанская область" => [
        "Рязань", "Ряжск", "Касимов", "Скопин"
    ],
    "Томская область" => ["Томск", "Северск", "Стрежевой"],
    "Тюменская область" => ["Тюмень", "Тобольск", "Ишим"]
];

foreach ($regionsCities as $regionName => $regionCities) {
    echo $regionName . ": ";
    for ($i = 0; $i < count($regionCities); $i++) {
        echo $regionCities[$i];
        if ($i === count($regionCities) - 1) {
            echo PHP_EOL;
        } else {
            echo ", ";
        }
    }
}