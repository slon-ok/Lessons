<?php 
    // УСТАНОВКА ЛОКАЛИ И ДАТЫ
    setlocale(LC_ALL, "Ukrainian");
    $day = strftime('%d');
    $month = strftime('%m');
    $year = strftime('%Y');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Lesson2. Laba2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <h1>Lesson 2.</h1>
            
            <?php 
            // удаление переменной
            $per = 10;
            unset($per);
            $name = "big";
            //смена кодировки
            echo iconv(windows-1251, UTF-8, $name);
            
            // классическое создание констант, константа присваивается 1 раз!!!
            
            define("OYAEBYCONST", "Vasya");
            echo OYAEBYCONST;
            
            // с версии 5.3 можно присваивать через const
            const HOPLALA = 100; // до версии 5.6 нельзя присваивать выражения
            //const HOPLALA56 = 100 + HOPLALA; // c версии 5.6 !
            
            // использовать не стоит, для общего развития
            // разрешение для константы быть регистронезависимой
            // третим параметром добавляется регистронезависимость последнего символа
            define("AAA", " 100", 1); 
            echo AAa;
            ?>
            
            <h2>Laba 2.2</h2>
            <?php
            echo 'Сегодня ' . $day . '-' . $month . '-' . $year;
            ?>
            
        </div>
    </body>
</html>