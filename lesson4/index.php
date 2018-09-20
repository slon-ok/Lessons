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
        <h1>Lesson 4</h1>
        <h2>Switch</h2>
        <?php 
            $size = ini_get("post_max_size");// 8M
            $letter = $size{strlen($size) - 1}; // M
            $size = (int)$size; // 8
            
            switch(strtoupper($letter)){
                case "G": $size *= 1024;
                case "M": $size *= 1024;
                case "K": $size *= 1024;
            }
            
            echo $size;
        ?>
    </body>
</html>