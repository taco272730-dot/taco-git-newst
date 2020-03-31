<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $ar1 = [
        'name' => 'Popo',
        'age' => 26,
        'gender' => 'female',
        'id' => 'B87878787',
    ];
    foreach($ar1 as $k => $v){
        echo "$k =&gt; $v <br>";
    };
    ?>
</body>
</html>