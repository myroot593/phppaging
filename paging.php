<?php

$total = 500; # jumlah konten yang ada di database
$tampil = 20; # konten yang ditampilkan perhalaman
$get = 6; # rubah ini sesuai jumlah halaman yang dibagi jumpage untuk menemukan perubahan
$jumpage = ceil($total/$tampil); # ini akan menghasilkan 25 
for($page=1; $page<=$jumpage; $page++)
{
	
	if(($page>=$get-2)&&($page<=$get+2))
	{
		echo '<a href="?page='.$page.'">'.$page.'</a>';
	}

	
}
/**
		Ket :

		($page>=$get -2) adalah ketika nilai page(perulangan) misal bernilai 6
		maka 6 -2 = 4; maka perulangan akan dimulai dari 4; kondisi pertama ini
		akan membuat nilai $page lebih kecil dari halaman aktifnya yaitu 6
		lalu ketika kondisi lebih kecil terpenuhi maka :

		($page<=$get+2) adalah 6+2 = 8, sehingga perulangan akan dimulai dari rentang 4,5,6,7,8.

		Angka 2 merupakan jarak pengurangan dan penambahan antar halaman atau kondisi pencacah
		untuk menaikan bilangan atau menurunkan bilangan saat perulangan terjadi.

		Kondisi pencacah pertama ($page>=$get-2) mengurangi
		Kondisi pencacah kedua ($page<=$get+2) menambah

		Contoh Lain :

		Ketika misal halaman aktif $get  bernilai 8
		maka 8 - 2 = 6; maka perulangan akan dimulai dari  6;

		selanjutnya kondisi yang sama ketika itu adalah ketika nilainya 8
		maka 8+2 = 10; sehingga perulangan akan dimulai dari 6,7,8,9,10

		# Kondisi Lain

		Kondisi selanjutnya jika misal ingin menampilkan halaman pertama
		dan halaman akhir maka kondisinya perlu dijadikan seperti berikut :

		if(($page>=$get-2)&&($page<=$get+2) || ($page==1) || ($page==$jumpage))
		{
			echo '<a href="?page='.$page.'">'.$page.'</a>';
		}
		
		Ketika ($page==1) halaman bernilai 1 dan ketika ($page==$jumpage) nilainya
		sama dengan jumlah halaman / nilai terakhir dari hasil bagi, maka
		for perlu menampilkan nilai 1 dan nilai terakhir
	**/

?>
