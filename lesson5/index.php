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
                echo "Должно быть 1: $a"; $a += 1;
                echo "<br />";
                
            // Постфиксный инкремент
                $x = 1;
                echo "Должно быть 2: " . ++$x;
                echo "<br />";
                echo "Должно быть 2: " . $x;
                echo "<br />";
                
            // Что и 
                $a += 1; echo "Должно быть 2: $a";
                echo "<br />";
                
            ?>
        <div>
    </body>
</html>