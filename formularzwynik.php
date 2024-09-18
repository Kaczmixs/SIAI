<?php
echo "obliczenie ";
$liczba1 = $_POST['liczba1'];
echo $liczba1;
$wybierz = $_POST['wybierz'];
echo $wybierz;
$liczba2 = $_POST["liczba2"];
echo $liczba2. "<br>";


if ($wybierz === "+") {
    $obliczenie = $liczba1 + $liczba2;
}
if ($wybierz === "-") {
    $obliczenie = $liczba1 - $liczba2;
}
if ($wybierz === "/") {
    $obliczenie = $liczba1 / $liczba2;
}
if ($wybierz === "*") {
    $obliczenie = $liczba1 * $liczba2;
}
if ($wybierz === "modulo") {
    $obliczenie = $liczba1 % $liczba2;
}
echo "wynik wynosi: ". $obliczenie;

?>
<br>
<a href="formularz.php">powrot na strone 1