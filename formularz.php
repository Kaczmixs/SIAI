<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    FORMULARZ - KALKULATOR<br>


    <form action="plikphp.php" method="post">
    <input type="number" name="liczba1" placeholder="podaj liczbe"></input>
    <select name="wybierz">
        <option>+</option>
        <option>-</option>
        <option>/</option>
        <option>*</option>
        <option>modulo</option>
    </select>
    <input type="number" name="liczba2" placeholder="podaj liczbe"></input><br>

    <button type="submit">wykonaj dzialanie</button>
    </form>


</body>
</html>