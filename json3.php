<?php
$json_data=file_get_contents("mhsw2.json");
$obj = json_decode($json_data);
echo "NIM : "; echo $obj->nim;
echo "<br>";
echo "Nama : "; echo $obj->nama;
echo "<br>";
echo "No HP : "; echo $obj->nohp;
echo "<br>";
echo "Makul pertama: ";echo $obj->makul[0];
echo "<br>";
echo "Makul kedua: ";echo $obj->makul[1];
echo "<br>";
echo "Makul ketiga: ";echo $obj->makul[2];
?>