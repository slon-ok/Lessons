<!DOCTYPE html>
<? php
    // задаем кодировку страницы
    header('Content-type: text/html; charset=utf-8');
?>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Lesson 4</h1>
        <h2>Switch</h2>
        <?php 
            $size = ini_get("post_max_size"); // 8M
            $letter = $size{strlen($size) - 1}; // M
            $size = (int)$size; // 8
            
            switch(strtoupper($letter)){
                case "G": $size *= 1024;
                case "M": $size *= 1024;
                case "K": $size *= 1024;
            }
            
            echo $size;
        ?>
        
        <h1>ARRAY</h1>
        <?php 
        
        $arr = [];          // создание массива c версии 5.4
        $arr1 = array();    // создание массива до версии 5.4 аналогичен первому
        $arr = [];          // при приведении типов пустой массив это FALSE
        $arr = ["John", "root", "1234"]; // создание и инициализация
        echo $arr[0];       // выведение первого элемента 
        echo count($arr);   // количество элементов массива
        $arr[] = 25;        // добавляет 4 (элемент с индексом на единицу больше 
                            // чем длина массива) элемент и присваивает ему значение 25
        $arr[12] = 112;     // добавляет ячейку с индесом 12 и присваивает ей 112
        $arr[] = true;      // добавит еще один элемент и присвоит ему тру
        print_r($arr);      // выводит элементы массива, тру выводит как единицу, не удобная
        var_dump($arr);     // выводит полную инфу о массиве. удобно    
        
        $arr[99] = true;    // добавляет в массив 6 элемент, с индексом 99. и присваивает ему тру
        $arr = [1=>"John", "root", "1234"]; // присваивает элементы начиная не с 0
                            // а с 1 элемента. 
        $arr = [10=>"John", "root", 5=>"1234"]; // присваивает элементы с единицы, 
                            // элемент 1234 ложится в ячейку 3 с индексом 5;
        ?>
    </body>
</html>