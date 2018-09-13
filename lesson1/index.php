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
        <div>
            <h1>Lesson 1</h1>
            <blockquote>
                <?php echo strftime('Сегодня %d-%m-%Y-%H-%M-%S'); ?>
            </blockquote>
            
            <?php 
            // удаление переменной
            $per = 10;
            unset($per);
            $name = "big";
            //смена кодировки
            echo iconv(windows-1251, UTF-8, $name);
            
            // классическое создание констант
            define(OYAEBYCONST, "Vasya");
            echo OYAEBYCONST;
            ?>
            
            <?php
            echo '<h2>Типы переменных - variables.php</h2>';
            
                //> Типы переменных
                
                $integerVariable    = 10;       // целое число
                $doubleVariable     = 20.5;     // вещественное число
                $stringVariable     = 'строковая переменная'; // строка
                $booleanVariable    = true;     //логический тип
                $nullVariable       = null;     //специальное значение NULL
                $arrayVariable      = array();  // массив
                
                /* 
                 * Будут рассмотрены в других уроках 
                 * $objectLinkVariable // ссылка на объект
                 * $resourceVariable = imageCreate() // Ресурс
                 */
                
                echo '$integerVariable = ' . $integerVariable . '<br />';
                echo '$doubleVariable = ' . $doubleVariable . '<br />'; 
                echo '$stringVariable = ' . $stringVariable . '<br / ';
                echo '$boolVariable = ' . $booleanVariable. '<br />';
                echo '$nullVariable = ' . $nullVariable . '<br />';
                echo '$arrayVariable = ' . $arrayVariable . '<br />';
                
                // <
                
                
                // > //Действия с переменной
                
                    // Проверка на существование, isset возвращает единицу 
                    // или null  если переменная не инициализированна
                    echo '<p><h2>Проверка на существование - isset()</h2>';
                    
                    echo 'Проверка переменной $integerVariable; isset($integerVariable) = '
                        . isset($integerVariable) . '<br />';
                    echo 'Проверка переменной $integerVariable2; isset($integerVariable2) = '
                        . isset($integerVariable2) . '<br />';
                    echo '</p>';
                    
                    echo '<p><h2>Уничтожение переменной - unset($integerVariable)</h2>';
                        unset($integerVariable);
                        
                    echo 'Проверка переменной $integerVariable; isset($integerVariable) = '
                        . isset($integerVariable) . '<br />';
                    echo'</p>';
                    
                    $integerVariable = 10;
                    
                    //> Определение типа переменной.
                    if(is_integer($integerVariable)){
                        echo '$integerVariable - целое число <br />';
                    } else {
                        echo 'переменная $integerVariable не является целым числом <br />';
                    }
                    // Определение типа переменной
                    echo 'Переменная $arayVariable имеет тип ' . gettype($arrayVariable) . '<br />';
                    
                    
                
            ?>
            
        </div>
    </body>
</html>