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
            echo '<h1> Сcылочная переменная</h1>'
            . '<br />'
                    . '$x = 10; <br /> $y = &$x; <br /> '
                    . 'echo $x; // 20' . '<br />' 
                    . 'echo $y; // 20' . '<br />';
            
            echo '<h1>Переменные переменных.</h1>' . '<br />';
            echo '$x = "name";';
            $x = name;
            
            echo '<br />';
            echo '$$x = "Вася"; // создать переменную по имени, которое хранится в $x'; 
            
            $$x = Вася;
            echo '<br />';
            
            $y = 20;
            echo '<br />';
            echo '"Привет, ", $name; //Привет, Вася.'; 
            echo '<br />';
            echo "Привет, ", $name;
            
            
            ?>
            
            <h2>Laba 2.2</h2>
            <?php

            ?>
            
        </div>
    </body>
</html>