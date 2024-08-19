<?php
function translitRuEn(string $str): string
{
    $translitRuEnArray = [

        'а' => 'a', 'б' => 'b', 'в' => 'v',

        'г' => 'g', 'д' => 'd', 'е' => 'e',

        'ё' => 'e', 'ж' => 'zh', 'з' => 'z',

        'и' => 'i', 'й' => 'y', 'к' => 'k',

        'л' => 'l', 'м' => 'm', 'н' => 'n',

        'о' => 'o', 'п' => 'p', 'р' => 'r',

        'с' => 's', 'т' => 't', 'у' => 'u',

        'ф' => 'f', 'х' => 'h', 'ц' => 'c',

        'ч' => 'ch', 'ш' => 'sh', 'щ' => 'shh',

        'ь' => '\'', 'ы' => 'y', 'ъ' => '\'',

        'э' => 'e', 'ю' => 'yu', 'я' => 'ya'
    ];

    foreach ($translitRuEnArray as $letterRu => $letterEn) {
        $translitRuEnArray[mb_strtoupper($letterRu)] = ucfirst($letterEn);
    }
    $arr = mb_str_split($str);
    $resultString = "";
    for ($i = 0; $i < count($arr); $i++) {
        if (array_key_exists($arr[$i], $translitRuEnArray)) {
            $resultString .= $translitRuEnArray[$arr[$i]];
        } else {
            $resultString .= $arr[$i];
        }
    }
    return $resultString;
}

$myString = 'Не растерялся Щелкунчик бесстрашный:
— В бой, оловянная армия! Маршем!
Вынул он саблю и крикнул: «Изволь!
Жизнью заплатишь, Мышиный Король!»';
$newString = translitRuEn($myString);
echo $newString;
