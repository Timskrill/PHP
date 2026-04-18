<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Задание 1.1 <br><br>";
        $i1 = 5;
        $i2 = 5.1;
        $i3 = "php";
        $i4 = false;
        $i5[] = "array";
        echo gettype($i1). "<br>";
        echo gettype($i2). "<br>";
        echo gettype($i3). "<br>";
        echo gettype($i4). "<br>";
        echo gettype($i5). "<br>";

    echo "<br> <br> Задание 1.2 <br>";
        $i1 = 4;
        $i2 = 4;
        echo $i1*$i2;
        echo "<br>";

    echo "<br> Задание 1.3 <br>";
        $string1 = "Hellow ";
        $string2 = "world";
        echo $string1.$string2;

    echo "<br> <br> Задание 1.4 <br>";
        $i1 = 3;
        $i2 = 4;
        $message = ($i1 < $i2)? "True":"False";
        echo $message;
    
    ?>
</body>
</html>
