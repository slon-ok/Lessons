<!DOCTYPE html>
<?php
    // задаем кодировку страницы
    echo header('Content-type: text/html; charset=utf-8');
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
        <title>Lesson 1</title>
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
                    
                    // Преобразование типов
                    
                    echo '<p><h2>Преобразование типов</h2>';
                    
                    $newVar = (string)$integerVariable;
                    echo' переменная $integerVariable имеет тип ' . gettype($integerVariable);
                    echo '<br />';
                    echo ', переменная $newVar имеет тип ' . gettype($newVar);
                    echo '<br />';
                    $newVar = (bool)$newVar; 
                    echo ' переменная $newVar сейчас имеет тип ' . gettype($newvar);
                    echo '<br />';
                    $newVar = (double)$newVar;
                    echo ' переменная $newVar имеет тип ' . gettype($newvar);
                    echo '<br />';
                    
                    
                    echo '<h1> Константы </h1>';
                    
                    ?>
                    
                    <?php 
                        // удаление переменной
                        $per = 10;
                        unset($per);
                        $name = "big";
                        //смена кодировки
                        echo iconv(windows-1251, UTF-8, $name);

                        // классическое создание констант, константа присваивается 1 раз!!!

                        define("OYAEBYCONST", "Vasya");
                        echo OYAEBYCONST;

                        // с версии 5.3 можно присваивать через const
                        //const HOPLALA = 100; // до версии 5.6 нельзя присваивать выражения
                        //const HOPLALA56 = 100 + HOPLALA; // c версии 5.6 !

                        // использовать не стоит, для общего развития
                        // разрешение для константы быть регистронезависимой
                        // третим параметром добавляется регистронезависимость последнего символа
                        define("AAA", " 100", 1); 
                        echo AAa;
                        echo '<br />';
                    
                        $var = 10 +10; //20
                        $var2 = 10 /2; 
                        $var3 = $var * 2 - $var2; //35
                        
                        echo $var . '<br />';
                        echo '<br />';
                        echo $var2 . '<br />';
                        echo '<br />';
                        echo $var3 . '<br />';
                        
                        echo '<h1>Математические операции со строками</h1>';
                        
                        $var = 'строка';
                        $var2 = 'вторая строка';
                        $var3 = $var . ' :: ' . $var2;
                        
                        echo $var . '<br />';
                        echo '<br />';
                        echo $var2 . '<br />';
                        echo '<br />';
                        echo $var3 . '<br />';
                    ?>

        </div>
    </body>
</html>