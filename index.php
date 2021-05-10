<?php 

// Raden Rafi
// Pull Req

// PHP Dasar

// Standard output
// echo,print
// print_r
// var_dump (debuging)

// penulisan sintax php
// 1. php dalam html(disarankan)
// 2. html dalam php

// variabel dan tipe data
// variabel
// tidak boleh diawali angka, tapi boleh mengandung angka
// nama variabel diawali "$"
$nama = "wiji sylvi";

// operator

// aritamatika
// +,-,*,/,%

// penggabung string / concatenation / concat
// .
$nama_depan = "sylvi";
$nama_belakang = "prasetyo";

// assignment (untuk melakukan aritmatik dengan variabelnya sendiri)
// =,+=,-=,/=,%=,.=

//perbandingan
// <, >, <=, >=, ==,!=
// var_dum(1="1") -- untuk mengecek nilai

// identitas
// ===,!==
// var_dum(1==="1") -- untuk mengecek nilai dan tipe variabel

// logika
// &&,||,!


?>

<!DOCTYPE html>
<html>
<head>
	<title>belajar php</title>
</head>
<body>
	<!-- contoh penulisan sintax 1 -->
	<h1>hallo, selamat pagi <?php echo "sylvi"; ?></h1> 

	<!-- contoh penulisan sintax 2 -->
	<?php 
		echo "<h1>hallo, selamat pagi juga pras</h1>";
	?>

	<!-- pemanggilan dengan variabel -->
	<h1>hallo, selamat pagi <?php echo $nama; ?></h1>	

	<!-- operator aritmatik-->
	<?php $a = 1; $b = 2;
		echo $a+$b;
	?>
	
	<!-- operator penggabung string -->
	<h1>Hallo, Selamat pagi <?php echo $nama_depan." ".$nama_belakang; ?></h1>

	<!-- operator perbandingan -->
	<?php var_dump(1==2); //untuk melihat perbandingan apakah sama dengan 
	?>
	

</body>
</html>