<!DOCTYPE html>
<? php
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
                    if($i == 5) Continue 1;
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
            $array = [1,5, "vanya"];
            foreach($array as $key => $val){
                    echo $key . " ---- " . $val . "<br />";
            }
            ?>
        <div>
    </body>
</html>