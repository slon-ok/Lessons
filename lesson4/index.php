<!DOCTYPE html>
<? php
    // задаем кодировку страницы
    header('Content-type: text/html; charset=utf-8');
?>

<html>
    <head>
        <title>Lesson4</title>
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
        echo "<br />";
        echo count($arr);   // количество элементов массива
        echo "<br />";
        $arr[] = 25;        // добавляет 4 (элемент с индексом на единицу больше 
                            // чем длина массива) элемент и присваивает ему значение 25
        $arr[12] = 112;     // добавляет ячейку с индесом 12 и присваивает ей 112
        $arr[] = true;      // добавит еще один элемент и присвоит ему тру
        print_r($arr);      // выводит элементы массива, тру выводит как единицу, не удобная
        echo "<br />";
        var_dump($arr);     // выводит полную инфу о массиве. удобно    
        echo "<br />";
        $arr[99] = true;    // добавляет в массив 6 элемент, с индексом 99. и присваивает ему тру
        $arr = [1=>"John", "root", "1234"]; // присваивает элементы начиная не с 0
                            // а с 1 элемента. 
        $arr = [10=>"John", "root", 5=>"1234"]; // присваивает элементы с единицы, 
                            // элемент 1234 ложится в ячейку 3 с индексом 5;
        var_dump($arr);
        echo "<br />";
        
        $arrr= [            // ассоциативный массив
            "name"=>"John",
            "login" => "root",
            "pass" =>"1234"
        ];
        
        $arrr[] = true;     // если в массиве уже есть элементы и следующий элемент присваивается без индекса,
                            // автоматически создаст ячейку  с индексом 1 больше чем самый большой индекс и присвоит ему значение. 
        echo $arrr["login"];       // обращение к элементу через имя
        echo "<br />";
        
        //test
        
        $arr_test = [9 => "dfad", 5=>124];
        $arr_test[] = "test";       // присваивает индекс 10!!!
        var_dump($arr_test);        // array(3) { [9]=> string(4) "dfad" [5]=> int(124) [10]=> string(4) "test" } 
        echo "<br />";  
        
        // если индексы только словесные, новому элементу без имени присвоит 0
        $arr_text = ["name" => "john", "lastname" => "smit" ];
        $arr_text[] =  "hop hop";
        var_dump($arr_text);        // array(3) { ["name"]=> string(4) "john" ["lastname"]=> string(4) "smit" [0]=> string(7) "hop hop" } 
        echo "<br />";
        
        unset($arr);               // удаление массива
        unset($arr_text["lastname"]); // удаление элемента массива по ключу
        
        echo is_array($arr_text); // вернет единицу, проверка на массив
        echo "<br />";
        
        // многомерный ассоциативный массив
        $user[0] = [
            "login" => "john",
            "pass"  => "1234"
        ];
        $user[1] = [
            "login" => "mike",
            "pass"  => "5678"
        ];
        
        echo $users[1]["login"]; //mike
        
        // структура навигации по сайту это массив
        
        ?>
        
        <h1>LABA - МЕНЮ</h1>
        
        <!---<ul>
            <li><a href="index.php">Домой</a></li>
            <li><a href="about.php">О нас</a></li>
            <li><a href="contact.php">Констакты</a></li>
            <li><a href="table.php">Таблица умножения</a></li>
            <li><a href="calc.php">Калькулятор</a></li>

        </ul> -->
        <?php
        $leftMenu = [
            ['link' => 'Домой',       'href' => '../index.php'],
            ['link' => 'О нас',       'href' => 'about.php'],
            ['link' => 'Контакты',    'href' => 'contact.php'],
            ['link' => 'Таблица',     'href' => 'table.php'],
            ['link' => 'Калькулятор', 'href' => 'calc.php']
        ];
        ?>
        
        <ul>
            <li><a href="<?= $leftMenu[0]['href']?>"><?=$leftMenu[0]['link']?></a></li>
            <li><a href="<?= $leftMenu[1]['href']?>"><?=$leftMenu[1]['link']?></a></li>
            <li><a href="<?= $leftMenu[2]['href']?>"><?=$leftMenu[2]['link']?></a></li>
            <li><a href="<?= $leftMenu[3]['href']?>"><?=$leftMenu[3]['link']?></a></li>
            <li><a href="<?= $leftMenu[4]['href']?>"><?=$leftMenu[4]['link']?></a></li>

        </ul>

        
    </body>
</html>