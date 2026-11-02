
<?php

// 1. SUMA
$a = 10;
$b = 5;

echo "Suma: " . ($a + $b) . "<br>";


// 2. PODSTAWY
$a = 10;
$b = 2;

echo "Roznica: " . ($a - $b) . "<br>";
echo "Iloczyn: " . ($a * $b) . "<br>";
echo "Iloraz: " . ($a / $b) . "<br>";


// 3. KALKULATOR
$a = 10;
$b = 5;
$dzialanie = "+";

if ($dzialanie == "+") {
    $wynik = $a + $b;
}
elseif ($dzialanie == "-") {
    $wynik = $a - $b;
}
elseif ($dzialanie == "*") {
    $wynik = $a * $b;
}
elseif ($dzialanie == "/") {
    $wynik = $a / $b;
}

echo "<div id='wynik'>$wynik</div>";


// 4. MAKS
$a = 5;
$b = 8;
$c = 3;

if ($a > $b && $a > $c) {
    echo "Najwieksza liczba: $a<br>";
}
elseif ($b > $a && $b > $c) {
    echo "Najwieksza liczba: $b<br>";
}
else {
    echo "Najwieksza liczba: $c<br>";
}


// 5. WZROST
$wzrost = 175;

if ($wzrost < 150) {
    echo "Niski<br>";
}
elseif ($wzrost > 180) {
    echo "Wysoki<br>";
}
else {
    echo "Sredni<br>";
}


// 6. BMI
$wzrost = 180;
$waga = 75;

$bmi = $waga / (($wzrost / 100) * ($wzrost / 100));

echo "BMI: " . $bmi . "<br>";

if ($bmi < 18.5) {
    echo "Za malo!<br>";
}
elseif ($bmi > 25) {
    echo "Za duzo!<br>";
}
else {
    echo "OK!<br>";
}


// 7. STARSZY
$data1 = "2000-05-10";
$data2 = "2003-08-15";

if ($data1 < $data2) {
    echo "Pierwsza osoba jest starsza<br>";
}
elseif ($data1 > $data2) {
    echo "Druga osoba jest starsza<br>";
}
else {
    echo "Osoby sa w tym samym wieku<br>";
}


// 8. PRZESTEPNY
function przestepny($rok) {
    if ($rok % 400 == 0 || ($rok % 4 == 0 && $rok % 100 != 0)) {
        echo "Rok przestepny<br>";
    }
    else {
        echo "Rok nieprzestepny<br>";
    }
}

przestepny(2024);


// 9. SILA HASLA
$haslo = "Haslo123!";

if (strlen($haslo) <= 4) {
    echo "Haslo slabe<br>";
}
elseif (strlen($haslo) <= 8) {
    echo "Haslo srednie<br>";
}
else {
    echo "Haslo mocne<br>";
}


// 10. TROJKAT
$a = 3;
$b = 4;
$c = 5;

if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
    echo "Mozna utworzyc trojkat<br>";
}
else {
    echo "Nie mozna utworzyc trojkata<br>";
}

?>

<!-- 11. SZYFR -->

<input type="text" id="tekst">
<p id="wynik"></p>

<script>
document.getElementById("tekst").oninput = function() {

    var tekst = this.value;
    var wynik = "";

    for (var i = 0; i < tekst.length; i++) {
        var kod = tekst.charCodeAt(i);

        if (kod >= 97 && kod <= 122) {
            wynik += String.fromCharCode(97 + (kod - 97 + 2) % 26);
        }
        else if (kod >= 65 && kod <= 90) {
            wynik += String.fromCharCode(65 + (kod - 65 + 2) % 26);
        }
        else {
            wynik += tekst[i];
        }
    }

    document.getElementById("wynik").innerHTML = wynik;
}
</script>
