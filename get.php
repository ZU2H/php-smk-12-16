<form action="" method="get">
    Nama :
    <input type="text" name="nama" id="">
    Alamat :
    <input type="text" name="alamat" id="">
    <input type="submit" value="simpan" name="kirim">
</form>

<?php 

    if (isset($_GET["kirim"])) {
        
        $nama = $_GET["nama"];
        $alamat = $_GET["alamat"];
    
        echo $nama;
        echo "<br>";
        echo $alamat;
    }


?>