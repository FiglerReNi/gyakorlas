<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //1.
        echo "Hello World! <br>";
        /* valami */
        //valami
        $color = "blue";
        echo "My car is " . $color . "<br>";
        echo "My house is " . $color . "<br>";
        echo "My boat is " . $color . "<br>";
        $txt = "W3Schools.com";
        echo "I love $txt!<br>";
        $x = 5;
        $y = 4;
        echo $x + $y;

        //2.
        //declared outside: only use outside functions
        $z = 5;

        function myTest() {
            echo "$z"; //hiba
        }

        myTest();
        echo "$z<br>";

        //declared inside: only use inside functions\A
        function myTest1() {
            $v = 5;
            echo "$v";
        }

        myTest1();
        echo "$v<br>"; //hiba 
        //declared inside: only use inside functions\B (static - save the variables' value. The variable is still local to the function.)

        function myTest4() {
            static $e = 0;
            echo $e . "<br>";
            $e++;
        }

        myTest4();  //static nélkül mindig a nullát írja ki
        myTest4();  //static nélkül mindig a nullát írja ki
        myTest4();  //static nélkül mindig a nullát írja ki 
        echo "$e<br>"; //hiba   
        // global keyword A
        $a = 5;
        $b = 10;

        function myTest2() {
            global $a, $b;
            $b = $a + $b;
            echo $b . "<br>";
        }

        myTest2();
        echo $b . "<br>";
        // global keyword B (PHP also stores all global variables in an array called $GLOBALS[index].
        //The index holds the name of the variable. 
        //This array is also accessible from within functions and can be used to update global variables directly.)
        $c = 5;
        $d = 8;

        function myTest3() {
            $GLOBALS['c'] = $GLOBALS['c'] + $GLOBALS['d'];
            echo $GLOBALS['d'] . "<br>";
        }

        myTest3();
        echo $c . "<br>";

        //3.
        var_dump($txt);
        echo "<br>";
        $cars = array("Volvo", "BMW", "Toyota");
        var_dump($cars);
        echo "<br>";

        //4. 
        $g = "Hello world!";
        $i;
        $g = null;
        var_dump($g);
        echo "<br>";

        //5. Constant (mindig global)
        define('GREETING', "Welcome to W3Schools.com!");
        echo GREETING . "<br>";

        function MyTest5() {
            echo GREETING . "<br>";
        }

        myTest5();

        //6. Operators: https://www.w3schools.com/php/php_operators.asp
        //7. 
        $t = date("H");
        echo $t . "<br>";
        if ($t > 8 && $t < 20) {
            echo "Have a good day <br>";
        } else {
            echo "Have a good night <br>";
        }

        //8.
        $q = 2;
        while ($q < 5) {
            echo $q . " ";
            $q++;
        }
        echo "<br>";
        do {
            echo $q . " ";
            $q++;
        } while ($q <= 10);
        echo "<br>";
        for ($s = 0; $s < 10; $s++) {
            echo $s . " ";
        }
        echo "<br>";
        $colors = array("red", "green", "blue", "yellow");
        foreach ($colors as $value) {
            echo $value . ", ";
        }
        echo "<br>";

        //9. Functions
        function familyName($fname, $year) {
            echo "$fname Refsnes. Born in $year. <br>";
        }

        familyName("Hege", "1975");
        familyName("Stale", "1978");
        familyName("Kai Jim", "1983");

        function setHeight($minheight = 50) {
            echo "The height is : $minheight <br>";
        }

        setHeight(350);
        setHeight();
        setHeight(135);
        setHeight(80);

        function sum($x, $y) {
            $z = $x + $y;
            return $z;
        }

        echo sum(5, 10) . "<br>";
        echo sum(7, 13) . "<br>";
        echo sum(2, 4) . "<br>";

        //10.
        $name = $_REQUEST['fname']; //adat gyűjtés
        $name = $_POST['fname'];    //adat gyűjtés method: post
        // $_SERVER[];           //szerver adatok (https://www.w3schools.com/php/php_superglobals.asp)
        
        //11. Date (https://www.w3schools.com/php/php_ref_date.asp)
        echo date("Y/m/d") . "<br>";
        echo date("Y.m.d") . "<br>";
        echo date("Y-m-d") . "<br>";
        echo date("l"). "<br>";
        echo date("Y"). "<br>";
        echo date("h:i:sa"). "<br>";
        // mktime(hour,minute,second,month,day,year); //számokból dátum
        $dd = mktime(12,5,6,10,5,2018);
        echo date("Y-m-d", $dd) . "<br>"; 
        //strtotime("tomorrow") //szövegből dátum
        
        //12.
        //<?php include 'vars.php';
        //<?php require 'vars.php';
        ?>
    </body>
</html>
