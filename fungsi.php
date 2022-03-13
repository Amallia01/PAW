<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tugas PAW nomor 3</title>
    </head>    
    <body>
	
        <?php
        function hitungUmur($tahunLahir, $tahunSekarang) {
            $umur = $tahunSekarang - $tahunLahir ;
			return $umur;
        }
		echo "Umur saya saat ini adalah ". hitungUmur(2001, 2022 ) ." tahun <br>";
		echo "Umur saya saat ini adalah ". hitungUmur(1997, 2022 ) ." tahun <br>";
		echo "Umur saya saat ini adalah ". hitungUmur(1989, 2022 ) ." tahun";
        ?> 
    </body>
</html>