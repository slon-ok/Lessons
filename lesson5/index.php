<!DOCTYPE html>
<?php
    // задаем кодировку страницы
    header('Content-type: text/html; charset=utf-8');
?>

<?php 
    // УСТАНОВКА ЛОКАЛИ И ДАТЫ
    setlocale(LC_ALL, "Ukrainian");
    $day = strftime('%d');
    $month = strftime('%m');
    $year = strftime('%Y');
?>

<html>
    <head>
        <title>Lesson5</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <h1>Lesson 5</h1>
            
            <?php 
            // Постфиксный инкремент
                $x = 1;
                echo "Должно быть 1: " . $x++;
                echo "<br />";
                echo "Должно быть 2: " . $x;
                echo "<br />";
            // Что и 
                $a = 1;
                echo "Должно быть 1: $a"; $a += 1;
                echo "<br />";
                
            // Постфиксный инкремент
                $x = 1;
                echo "Должно быть 2: " . ++$x;
                echo "<br />";
                echo "Должно быть 2: " . $x;
                echo "<br />";
                
            // Что и 
                $a = 1;
                $a += 1; echo "Должно быть 2: $a";
                echo "<br />";
                
            ?>
            
            <h1>ЦИКЛЫ</h1>
            <?php 
                for($i =1; $i > 10; $i++){
                    echo $i;
                }
                $i = 1;
                
                while($i < 10){
                    echo $i;
                    $i += 1;
                }
                
                $str = "HELLO";
                $i = 0;
            ?>
            
            <p>
                
            <?php
                $len = strlen($str); // не молоти в холостую!!! 
                while($i < $len){       //посчитай строку заранее !!!
                    echo $str{$i} . "<br />";
                    $i += 1;
                }
                echo "<br />";
                echo $str[4];
                echo $str{4}; // идентичные команды
                
                $array = [1, 2, 3, 4];
                echo $array[0];
                echo $array[0]; // идентичные команды. 
            ?>
                
            <h2>do-while</h2>
            <?php    
                $i = 1;
                do{
                    echo $i++;
                }
                while($i <= 10);    
            ?>
            
            
            <?php
                while($k = 0){
                    while($i < 9){
                        $i++;
                        if($i == 5) break 2; // выходит не только из этого цикла,
                        echo $i;             // а и из предыдущего.  по умолчанию значение 1
                    }                        // уровней должно быть не больше чем в реальности
                }
            ?>
            <?php
                while($i < 9){
                    $i++;
                    if($i == 5) Continue;
                    echo $i;
                }
            ?>
            </p>
            
            <h1>Laba 3.3</h1>
            <?php
            
            $cols = 10;
            $rows = 10;
            $color = "blue";
            
            echo "<table style='border: 1px solid black;'>";
            for($i = 1; $i <= $cols; $i++){
                echo "<tr>";
                for($j = 1; $j <= $rows; $j++){
                    if($j==1 or $i == 1){
                        echo "<th style='border: 1px solid black; background: $color;'>  " . $j * $i ."  </th>";
                    } else{
                        echo "<td style='border: 1px solid black;'>  " . $j * $i ."  </td>";
                    } 
                }
                echo "</tr>";
            }
            echo "</table>";
            
            ?>
            
            <h2>Foreache</h2>
            <?php 
            $arrr= [            // ассоциативный массив
                "name"=>"John",
                "login" => "root",
                "pass" =>"1234"
            ];
            foreach($arrr as $key => $val){ // ($arr as $val)
                    echo $key . " ---- " . $val . "<br />";
            }
            
            $arr_test = [1,2,3,4,5];
            print_r($arr_test);
            echo "<br />";
            foreach($arr_test as &$v){  // & для работы со ссылочными переменными
                $v *= 10;  // после испльзования $v остается. и при коде: 
            }              // $v = 100 после foreach, присвоит данные последнему  
            echo "<br />"; // элементу массива
            print_r($arr_test);
            
            ?>
            <h1>Новое меню через Foreach</h1>
            <?php 
            
                $leftMenu = [
                    ['link' => 'Домой',       'href' => '../index.php'],
                    ['link' => 'О нас',       'href' => 'about.php'],
                    ['link' => 'Контакты',    'href' => 'contact.php'],
                    ['link' => 'Таблица',     'href' => 'table.php'],
                    ['link' => 'Калькулятор', 'href' => 'calc.php']
                ];
            
                // Menu
            echo "<ul>";
            foreach($leftMenu as $item){
                echo "<li>";
                echo "<a href='{$item['href']}'>{$item['link']}</a>";
                // или так echo "<a href='$item[href]'>$item[link]</a>";
                // или не указывать кавычки для ключей
                // ну лучше с фигурными скобками, ибо путаница с именами
                // парсер расценивает как константу, и сначала ищет ее
                // но в двойных кавычках константы не подставляются
                // поэтому можно писать и без ключей
                echo "</li>";
            }
            echo "</ul>";
            ?>
            
            <?php
                //FOREACH работает только с массивами, при подстановке
                // в первый аргумент передать другой тип, выйдет ошибка
                // INVALID ARGUMENT in foreach
            ?>
            
        <div>
    </body>
</html>