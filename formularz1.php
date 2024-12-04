<?php
    $liczba1 = $_POST['liczba1'];
    $liczba2 = $_POST['liczba2'];
    
    $wybierz = $_POST['wybierz'];
    
    echo "liczba 1 to: " .$liczba1 . "<br>" ;
    echo "liczba 2 to: " .$liczba2 . "<br>" ;
    

    if ($wybierz === "+"){
        $wynik = $liczba1 + $liczba2;
        echo "wynik: ".$wynik;
    };
    if ($wybierz === "-"){
        $wynik = $liczba1 - $liczba2;
        echo "wynik: ".$wynik;
    };
    if ($wybierz === "/"){
        $wynik = $liczba1 / $liczba2;
        echo "wynik: ".$wynik;
    };
    if ($wybierz === "x"){
        $wynik = $liczba1 * $liczba2;
        echo "wynik: ".$wynik;
    };
    if ($wybierz === "modulo"){
        $wynik = $liczba1 % $liczba2;
        echo "wynik: ".$wynik;
    };


?>