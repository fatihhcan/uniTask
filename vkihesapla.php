<?php
$boy=$_POST['boy'];
$kilo=$_POST['kilo'];

$boy=$boy/100;
$vki = $kilo/($boy*$boy) ;
$vki=round($vki,2);

if ($vki<18.5){
echo $kategori = "Zayıf";
}

else if($vki>=20 && $vki<=25){
    echo $kategori = "Normal";
}


else if ($vki>=25.0 && $vki<=28){
    echo $kategori = "Kilolu riskli";
}

else if ($vki>=28.0 && $vki<=30){
    echo $kategori = "Kilolu oldukça obez";
}

else if ($vki>30.0){
echo $kategori = "Kilolu aşırı obez";
}

echo "<table border='1' width='200px'>";
echo "<tr>";
echo "<th>Boy</th>";
echo "<td>$boy</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Kilo</th>";
echo "<td>$kilo</td>";
echo "<tr>";

echo "<th>VKİ</th>";
echo "<td>$vki</td>";

echo "<tr>";
echo "<th>Kategori</th>";
echo "<td>$kategori</td>";
echo "</tr>";
echo "</table>";
?>