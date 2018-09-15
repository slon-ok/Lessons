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
            
            ?>
            
            <h2>Laba 3</h2>
            <?php
            
            ?>
            
        </div>
    </body>
</html>