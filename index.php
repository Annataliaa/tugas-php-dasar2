<?php
function writeMsg (){
        echo "Hello guys !! <br>";
        echo "Perkenalkan Saya Annatalia <br>";
        echo "Dari FSWD - 2 <br>";
        echo "ID Kegiatan	: 4561436 <br>";
        echo "Hasil tugas pertemuan 17 nih hehe <br>";
}

writeMsg ();

function soal1A($a = 5, $simbol = "* "){
    echo "Triangle upside left <br>";
        for ($x = 1; $x <= $a; $x++){
            for($y = 1; $y <= $x; $y++){
                echo $simbol;
            }
            echo "<br>";
        }
    }

function soal1B($a = 5, $simbol = "* "){
    echo "Triangle downside left <br>";
        for ($x = $a; $x >= 1; $x--){
            for($y = 1; $y <= $x; $y++){
                    echo $simbol;
                }
                echo "<br>";
            }
        }

function soal1C($a = 5, $simbol = "* "){
    echo "Triangle upside right <br>";
    for($x = 1; $x <= $a; $x++){
        for($y = $a; $y > $x; $y--){
            echo "&nbsp;&nbsp";
            }
            for($z = 1; $z <= $x; $z++){
                echo  $simbol;
            }
            echo "<br>";
        }
    }
function soal1D($a = 5, $simbol = "*"){
    echo "Triangle downside right <br>";
    for($x = 1; $x <= $a; $x++){
        for($z = 1; $z < $x; $z++){
            echo "&nbsp;&nbsp";
            }
            for($y = $a; $y >= $x; $y--){
                    echo  $simbol;
            }
            echo "<br>";
        }
    }
echo "<br>";
echo "Soal 3 <br>";
soal1A($a = 6, $simbol = "$ ");
soal1B($a = 10, $simbol = "@ ");
soal1C($a = 9, $simbol = "#");
soal1D($a = 6, $simbol = "*");

function soal2($b) {
    echo "<br>";
    echo "Soal 2 <br>";
    switch ($b) {
        case "soal1A":
            soal1a(5);
            break;
        case "soal1B":
            soal1b(5);
            break;
        case "soal1C":
            soal1c(5);
            break;
        case "soal1D":
            soal1d(5);
            break;
        default:
            echo "salah input";
    }
}

soal2("soal1C")
?>