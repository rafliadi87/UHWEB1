<?php
    //Variable Global
    $nama = "Rafli Adi Rizki Maulana Saputra";
    $kelas = "XII RPL 1";
    $absen = 22;
    $alamat = "Pesona Permata Unggu Desa Tempel-Krian";
    
    function tampilkanDataDiri() {
        global $nama, $kelas, $absen, $alamat;

        echo "Nama: ". $nama . "<br>";
        echo "Kelas: ". $kelas. "<br>";
        echo "Absen: ". $absen. "<br>";
        echo "Alamat:". $alamat. "<br>";

    }
    //Memanggil fungsi untuk menampilkan data diri
    tampilkanDataDiri();
?>