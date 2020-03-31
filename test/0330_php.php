<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    




    <?php
        echo PHP_VERSION. '<br>';//版本
        echo __DIR__.'<br>';//所在的資料夾
        echo __FILE__. '<br>';//完整的路徑
        echo __LINE__. '<br>';//出錯的在哪一行

        define('MY_CONST',3000);
        echo MY_CONST. '<br>';
        echo FALSE. '<br>';//布林值不區分大小寫，false會呈現空值
        echo true. '<br>';//布林值不區分大小寫，true會呈現1
    ?>
</body>
</html>