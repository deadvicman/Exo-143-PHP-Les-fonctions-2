<?php
function maFonction(){
    return true;
}
maFonction();

function myTest(string $nom, string $prenom){
    return $nom . $prenom;
}


myTest();



function number(int $number1, int $number2){
    if ($number1 > $number2){
        echo "$number1 est plus grand que $number2";
    }
    if ($number1 < $number2){
        echo "$number1 est plus petit que $number2";
    }
    if($number1 === $number2){
        echo " $number1  est  $number2 sont égaux";
    }
}

number(215, 20);
number(30, 20);
number(1, 2);



function concate(int $monint, string $monstring){
    return $monstring . $monint;
}

concate();



function test($nom, $prenom, $age){
    return "Bonjour $nom $prenom  tu as, $age ans";
}