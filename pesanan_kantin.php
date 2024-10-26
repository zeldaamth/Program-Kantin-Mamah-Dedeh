<?php
    $nama=$_POST['nama'];
    
        $hargaNasi = isset($_POST['nasi']) ? 2000 : 0;
        $hargaIkanBakar = isset($_POST['ikanBakar']) ? 3000 : 0;
        $hargaAyamBakar = isset($_POST['ayamBakar']) ? 4000 : 0;
        $hargaSayurLodeh = isset($_POST['sayurLodeh']) ? 2000 : 0;
        $hargaTumisKangkung = isset($_POST['tumisKangkung']) ? 2000 : 0;
    
        $totalHarga = $hargaNasi + $hargaIkanBakar + $hargaAyamBakar + $hargaSayurLodeh + $hargaTumisKangkung;
    
        echo "<h1>Total Harga: Rp. $totalHarga<br></h1>";
  
        if ($totalHarga<7000){
        echo "<h3>Selamat Makan $nama, by Mamah Dedeh <br/></h3>";
        }elseif ($totalHarga >= 7000 && $totalHarga < 13000) {
        echo "<h3>Hi, $nama</h3>";
        echo "<h1>Bonus:</h1>";
        echo "<ul>";
        echo "<li>Minuman gratis : Teh Manis Dingin</li>";
    } elseif ($totalHarga >= 13000) {
        $diskon = $totalHarga * 0.1; // Kalikan total harga dengan diskon 10%
        $hargaSetelahDiskon = $totalHarga - $diskon;
        echo "<h3>Hi, $nama</h3>";
        echo "<h1>Bonus :</h1>";
        echo "<ul>";
        echo "<li>Minuman Gratis : Jus Jeruk</li>"; 
        echo "<li>Diskon : Rp. " . number_format($diskon) . "</li>";
        echo "<li>Harga Sekarang : Rp. " . number_format($hargaSetelahDiskon) . "</li>";
        echo "</ul>";
    }
    ?>
    