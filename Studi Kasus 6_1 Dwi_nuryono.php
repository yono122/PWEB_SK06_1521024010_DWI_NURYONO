<html>
<head>
	<title>Studi Kasus 6_1 A Dwi_nuryono</title>
</head>
<body>

<?php
$phi = 3.14;
$r = 401;
function luas(){
	global $phi, $r;
	$luaslingkaran = $phi * $r * $r;
	echo $luaslingkaran;
}
function keliling(){
	global $phi, $r;
	$keliling = 2 * $phi * $r;
	echo $keliling;
}
function volume(){
	global $phi, $r;
	$volume = 4 * $phi * $r * $r;
	echo $volume;
}
echo " r = $r"."<br>";
{echo " <b>Menghitung Luas Lingkaran </b><br/>";}
{echo "=================================================<br/>";
echo " luas lingkaran = ";luas();
echo "<br/>=================================================<br></br><br></br>";
}
{echo " <b>Menghitung Keliling Lingkaran </b><br/>";}
{echo "=================================================<br/>";
echo " keliling lingkaran = ";keliling();
echo "<br/>=================================================<br></br><br></br>";
}
{echo "<b>Menghitung Volume Bola</b></br>";}
{echo "=================================================</br>";
echo "Volume Bola= = ";volume();
echo "<br/>=================================================" ;}
echo "<br/> NB : NIM 1521024001, nilai diameter saya ambil 401"
?>
</body>
</html>