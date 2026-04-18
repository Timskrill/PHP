<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo "Задание 1.1 <br>";
        $i1 = 5;
        $i2 = 5.1;
        $i3 = "php";
        $i4 = false;
        $i5[] = "array";
        echo gettype($i1);
        echo gettype($i2);
        echo gettype($i3);
        echo gettype($i4);
        echo gettype($i5);

    echo "<br> <br> Задание 1.2 <br>";
        $i1 = 4;
        $i2 = 4;
        echo $i1*$i2;
        echo "<br>";

    echo "<br> <br> Задание 1.3 <br>";
        $string1 = "Hellow ";
        $string2 = "world";
        echo $string1.$string2;

    echo "<br> <br> Задание 1.4 <br>";
        $i1 = 3;
        $i2 = 4;
        $message = ($i1 < $i2)? "True":"False";
        echo $message;
    echo "<br> <br> Задание 1 <br>";
    $age = 16;
    if($age > 17 and $age < 36) {echo "Счастливчик! <br> <br>";}
    else if($age <= 17 and $age >= 1) {echo "Слишком молод <br> <br>";}
    else {echo "Не повезло <br> <br>";}
    ?>
    <?php 
    echo "Задание 2 <br>";
        for($i = 1; $i<=100; $i++){
            $array[$i] = $i;
            if ($array[$i] % 5 == 0){
                echo "$array[$i] <br>";
            }
        }
    ?>
    <?php 
    echo "<br> <br> Задание 3 <br>";
        $array = [
            "Name" => "Тимур",
            "Address" => "СПб",
            "Phone" => "+792102323232",
            "Mail" => "timmmm@example.com"
        ];
        foreach ($array as $key => $value) {
            echo "$key: $value\n";
        }
    ?>
    <?php
        // 1. 'php' -> 'PHP'
        $str1 = 'php';
        $str1 = strtoupper($str1);
        echo "<br><br> 1. $str1<br><br>";

        // 2. 'london' -> 'London'
        $str2 = 'london';
        $str2 = ucfirst($str2);
        echo "2. $str2<br><br>";

        // 3. 'London' -> 'london'
        $str3 = 'London';
        $str3 = strtolower($str3);
        echo "3. $str3<br><br>";

        // 4. Длина строки 'html css php'
        $str4 = 'html css php';
        $length4 = strlen($str4);
        echo "4. Количество символов: $length4<br><br>";

        // 5. Проверка пароля
        $password = '1234567'; 
        if (strlen($password) > 5 && strlen($password) < 10) {
            echo "5. Пароль подходит<br><br>";
        } else {
            echo "5. Нужно придумать другой пароль<br><br>";
        }

        // 6. Проверка окончания на '.png'
        $str6 = 'loh.png'; 
        if (substr($str6, -4) === '.png') {
            echo "6. да<br><br>";
        } else {
            echo "6. нет<br><br>";
        }

        // 7. Замена точек на дефисы
        $str7 = '31.12.2013';
        $str7 = str_replace('.', '-', $str7);
        echo "7. $str7<br><br>";

        // 8. Замена букв на цифры
        $str8 = 'abcabc';
        $str8 = str_replace(['a', 'b', 'c'], [1, 2, 3], $str8);
        echo "8. $str8<br><br>";

        // 9. Удаление цифр из строки
        $str9 = '1a2b3c4b5d6e7f8g9h0';
        $str9 = preg_replace('/[0-9]/', '', $str9);
        echo "9. $str9<br><br>";

        // 10. Позиция первой буквы 'b'
        $str10 = 'abc abc abc';
        $pos10 = strpos($str10, 'b');
        echo "10. Позиция первой 'b': $pos10<br><br>";

        // 11. Позиция последней буквы 'b'
        $str11 = 'abc abc abc';
        $pos11 = strrpos($str11, 'b');
        echo "11. Позиция последней 'b': $pos11<br><br>";

        // 12. Вывод каждого символа строки в отдельной строке
        $str12 = "Hello";
        echo "12. Каждый символ строки '$str12':<br>";
        for ($i = 0; $i < strlen($str12); $i++) {
            echo $str12[$i] . "<br>";
        }
        echo "<br>";

        // 13. Вывод строки в обратном порядке
        $str13 = "Hello World";
        $reversed = "";
        for ($i = strlen($str13) - 1; $i >= 0; $i--) {
            $reversed .= $str13[$i];
        }
        echo "13. Строка '$str13' в обратном порядке: $reversed<br><br>";

        // 14. Проверка на палиндром без встроенных функций
        $str14 = "madam";
        $isPalindrome = true;
        $length = strlen($str14);
        for ($i = 0; $i < $length / 2; $i++) {
            if ($str14[$i] !== $str14[$length - 1 - $i]) {
                $isPalindrome = false;
                break;
            }
        }
        echo "14. Строка '$str14' ";
        echo $isPalindrome ? "является палиндромом" : "не является палиндромом";
        echo "<br><br>";

        // 15. Замена пробелов на подчеркивание
        $str15 = "Hello World PHP Script";
        $result15 = "";
        for ($i = 0; $i < strlen($str15); $i++) {
            if ($str15[$i] === " ") {
                $result15 .= "_";
            } else {
                $result15 .= $str15[$i];
            }
        }
        echo "15. Строка с подчеркиваниями: $result15<br><br>";

        // 16. Разбивка на слова и вывод в обратном порядке
        $str16 = "один два три четыре";
        $words = [];
        $word = "";
        // Разбиваем строку на слова вручную
        for ($i = 0; $i < strlen($str16); $i++) {
            if ($str16[$i] === " ") {
                if ($word !== "") {
                    $words[] = $word;
                    $word = "";
                }
            } else {
                $word .= $str16[$i];
            }
        }
        if ($word !== "") {
            $words[] = $word;
        }
        // Выводим слова в обратном порядке
        echo "16. Слова в обратном порядке: ";
        for ($i = count($words) - 1; $i >= 0; $i--) {
            echo $words[$i];
            if ($i > 0) echo " ";
        }
        echo "<br><br>";

?>
</body>
</html>