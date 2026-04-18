<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h2> Задача 1 </h2>";
    $age = 25;
    if ($age >= 18 && $age <= 35 ){
        echo "Счастливчик!";
    }
    else if ($age >= 1 && $age <=17){
        echo "Слишком молод";
    }
    else {
        echo "не повезло";
    }
    
    echo "<br><br> <h2> Задача 2 </h2>";

    
    for ($i = 1; $i <= 100; $i++) {
        $numbers[$i] = $i;
        if ($numbers[$i] % 5 == 0) {
            echo $numbers[$i]. " " ;

        }
    }
    echo " <br>Четные числа в диапазоне от до 100, которые делятся на 5";
  
    echo "<br><br> <h2> Задача 3</h2>";

    $array = [
        "Name" => "Тимур Курбанов",
        "Adress" => "Сакнт-Петербург",
        "Phone" => "+7(898)-898-67-67",
        "Mail" => "tk@example.mail"

    ];
    foreach ($array as $element => $value){
        echo $element . ": ". $value . "<br>";
    }    
    ?>
</body>
</html>

