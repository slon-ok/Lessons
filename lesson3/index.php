<!DOCTYPE html>
<? php
    // задаем кодировку страницы
    header('Content-type: text/html; charset=utf-8');
?>
<? short_open_tag=On ?>
<html>
    <head>
        <title>Lesson3.</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <h1>Lesson 3</h1>
            
            <?php 
            echo '<h1>Strings</h1>';
            echo "echo \" Hello \n\t world!\";"
            . "// Hello "
                    . "wold!";// \n\t них не работает
            echo '<br />';
            echo "Hello \n\t world!";
            echo '<br />';
            echo 'echo \'Hello \n\t world!\'; // Hello \n\t world!';
            echo '<br />';
            echo 'Hello \n\t world!';
            echo '<br />';
            
            echo 'В двойных кавычках можно вставлять переменные не слепляя<br />';
            echo 'В одинарных нет.<br />';
            echo '$var = kolia;<br />';
            $var = kolia;
            echo "My name is (\$var ) $var<br />";
            echo 'My name is $var';
            
             echo '<h1>Heredoc</h1>';
             
             echo <<<bigcitata
                В нашем краю крутые утки, их вырастил $var (\$var). Светлая ему 
                     память          и побольше детей. 
                     Закрывающий идентификатор херидока, обязательно без табуляции с начала строки. 
bigcitata;
            echo '<br />';
             echo "<h1>Экранирование переменных</h1>";
             $juice = "apple";
             echo '<br />';
             echo "\$juice = apple;";
             echo '<br />';
             echo "He drank some $juice juice.";
             echo '<br />';
             echo "He drank some juice made of $juices.";
             echo '<br />';
             echo "//Решение";
             echo '<br />';
             echo "He drank some juice made of {\\\$juice}s.";
             echo '<br />';
             echo "He drank some juice made of {$juice}s.";
             echo '<br />';
             echo "// Доступ к символу в строке";
             echo '<br />';
             echo "\$str = 'This is a test.'";
             echo '<br />';
             echo "//Получение третьего символа из строки";
             echo '<br />';
             echo "\$first = \$str{2};// is 'i'";
             echo '<br />';
             echo "Длина строки: \$len = strlen();";
             echo '<br />';
             
             // получение последнего символа строки 
             $name = "John!";
             $len = strlen($name);
             $pos = $len - 1;
             echo $name{$pos};
             
             // или так
             $last = $str{strlen($str)-1};
             
             
             
             
             
             
            ?>
            
            <h2>Laba 3</h2>
            <?php
            
            ?>
            
        </div>
    </body>
</html>