<!DOCTYPE html>

<html>
    <head>
        <title>Lesson6</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>ФУНКЦИИ</h1>
        <h2>Пользовательские функции</h2>
        
        <?php
            function say($name){
                echo "function is start! $name<br />";
            }
            $n = "sey moia say";
            say("Petya");  // в PHP нет перегрузки функций
            Say($n);  // попытка повторно описать код 
            say("flfllflf");  // одной и той же функции выдаст ошибку
              // функцию можно вызвать раньше инициализации
            echo "<br />";
            echo "<h2>Необязательные аргументы</h2>";
            function testik($name, $lastname, $age = 18){
                echo $name . $lastname . $age; //age - не обязательный
                // не обязательные параметры в конце
            }
            echo "<br />";
            echo 'ВЫЗОВ ФУНКЦИИ ЧЕРЕЗ ПЕРЕМЕННУЮ';
            echo "<br />";
            echo "\$str = 'say' // может быть только строкой"; 
            echo "<br />";
            echo '$str();';
            
            
            //чтобы переменная не теряла значение, используется static
            // либо global, но лучше статик. чтобы не засирать память
            //$cnt = 0;  -- обїявление при использовании глобала
            function foo(){
                static $cnt = 0; // даже при вызове функции второй раз ноль не присвоит
                //global $cnt; // потому что объявлена статической. 
                echo $cnt++;
                echo "Таблица рисуется $cnt раз. ";
            }

        ?>
        
        <h1>Laba function vertical menu</h1>
        <?php
        
        $leftMenu = [
                    ['link' => 'Домой',       'href' => '../index.php'],
                    ['link' => 'О нас',       'href' => 'about.php'],
                    ['link' => 'Контакты',    'href' => 'contact.php'],
                    ['link' => 'Таблица',     'href' => 'table.php'],
                    ['link' => 'Калькулятор', 'href' => 'calc.php']
                ];
        
        function drawMenu($menu, $vertical=true){
            $style = "";
            if(!$vertical){
                $style = " style='display:inline; margin-right:15px'";
            }
            echo "<ul>";
            foreach($menu as $item){
                echo "<li$style>";
                echo "<a href='{$item['href']}'>{$item['link']}</a>";
                echo "</li>";
            }
        }
        
        drawMenu($leftMenu, false);
        ?>
        
        
        <h2>Функция возвращает значение всегда. Возврат нескольких значений. List</h2>
        <?php
            function sum($n1, $n2){  //функции возвращают значение всегда  
                return $n1 + $n2; 
        }
        $result = sum(2,3);
        echo $result;
        
        // чтобы вернуть несколько значенй можно вернуть массив,
        function nums(){
            return [1,2,3];
        }
        list($one, $two, $three) = nums(); // присваивает переменным несколько значений 
        echo $two;                         // работает только с индексированным массивом
                                           // с ассоциативным не прокатит
        
        //$arr = nums()[1];               // доступно с версии PHP 5.4 выдергивание
                            // переменной из массива, который возвращает функция
        
        
        function gnums($x, $y, &$a, &$b, &$c){  // запишет в ссылки результат 
            $a = $x * $y;
            $b = $b / $y;
            $c = $x - $y;
            return $x + $y;
        }
        
       /* function x($a, &$b){ // можно запхать сообщение об ошибке
            if()
                return true;
            else
                $b = " ... .. ";
                return false;
        }*/
        ?>
        
        <h2>Неограниченное количество параметров</h2>
            <?php
            
            function arrFoo(array $param){
            
            } //принимает только массив из параметров
            //
            function bar($p){};
            
            //function colFoo(callable $param){ //с версии 5.4
               //$param($x);     // так же может принимать функции.
            //}
            
            
            
            ?>
            <?php 
            function foo(){
                echo func_num_args();
                print_r(func_get_args() );
                echo func_get_arg(2);
            }
            
            foo(1,2,3,4,5);
            
            
        ?>
    </body>
</html>
