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
             
             // isset() веренет тру или фолс если значение null
             
             echo <<<vstavka
             ОПЕРАЦИИ СРАВНЕНИЯ:<br />
             echo 1 == "1"; //true <br /> 
             echo 1 === "1"; // false, жесткое сравнение<br />
             echo a != b; ne ravno, tru esli ne ravno<br />
             echo a !== b; tojdestvenno ne ravno true esli raznie tipi<br />
             <br />
             ЛОГИЧЕСКИЕ ОПЕРАТОРЫ<br />
             $ a and $ b; логическое И TRUE, если и $a, и $b TRUE.<br />
             $ a or $ b;  логическое ИЛИ 	TRUE, если или $a, или $b TRUE.<br />
             $ a xor $ b; исключающее или TRUE, если $a, или $b TRUE, но не оба.<br />
             $ a && $ b;  логическое и жесткое, если не первое, второе не исполняется<br />
             $ a || $ b;  логическое или жесткое<br />
             

vstavka;
            ?>
            
            <h2>Laba 3</h2>
            <?php
            /*Приветствие*/
            $hour = (int)strftime('%H');
            $vremiaSytok; 
            if ($hour > 0 and $hour < 6){
                $vremiaSytok = "night";
            } elseif($hour > 6 and $hour < 12){
                $vremiaSytok = "morning";
            } elseif($hour > 12 and $hour < 18){
                $vremiaSytok = "day";
            } elseif($hour > 18 and $hour <= 23){
                $vremiaSytok = "evening";
            }
            $welcome = "Welcom! Good {$vremiaSytok}!";
            echo '<br />';
            echo $welcome;
            echo '<br />';
            echo $hour;
            
            echo <<< vstavka
            if($day = 2)
                    echo "Понедельник";
            elseif ($day = 3)
                    echo "Vtornik";
            elseif ($day = 4)
                    echo "Sreda";
            else "neizvestnii den";
                    
            $i = 2;
            switch($i){
                case 0: 
                    echo "Результат: 0"; 
                    break;
                case 1: 
                    echo "Результат: 1"; 
                    break;
                case 2: 
                    echo "Результат: 2"; 
                    break;
                case 3: 
                    echo "Результат: 3"; 
                    break;
            }
                    

vstavka;
                    ?>
            
        </div>
    </body>
</html>