<!DOCTYPE html>
<html>
<head>
    <title>Kasir</title>

    <style>
        body {
            font-family: Arial;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .kotak {
            width: 400px;
            margin: 50px auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
        }

        label {
            display: block;
            margin-top: 15px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background: black;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: gray;
        }

        .hasil {
            margin-top: 25px;
            padding: 15px;
            background: #f7f7f7;
            border-radius: 8px;
            /* Mengubah semua teks di dalam elemen .hasil menjadi huruf kecil */
            text-transform: lowercase; 
        }
    </style>
</head>

<body>

<div class="kotak">

    <h1>Ulangan Kasir</h1>
    <p>Masukkan Data</p>

    <form method="post">

        <label>nama barang</label>
        <input type="text" name="nama_barang" required>

        <label>harga</label>
        <input type="number" name="harga" required>

        <label>jumlah barang</label>
        <input type="number" name="jumlah" required> 

        <label>nama pembeli</label>
        <input type="text" name="nama_pelanggan" required> 

        <label>member</label>
        <input type="text" name="member" required> 

        <button type="submit" name="submit">Lihat Hasil</button>

    </form>

<?php
if (isset($_POST['submit'])) {

    $nama_barang = strtolower($_POST["nama_barang"]);
    $harga = $_POST["harga"];
    $jumlah = $_POST["jumlah"];
    $nama_pembeli = strtolower($_POST["nama_pelanggan"]);
    $member = $_POST["member"];

    if ($harga >= 500000) {
        $persenDiskon = 10;
    } elseif ($harga > 250000) {
        $persenDiskon = 5;
    } elseif ($harga <= 250000) {
        $persenDiskon = 0;
    }

    $subtotal = $harga * $jumlah;
    $diskon = $subtotal * ($persenDiskon / 100);
    $totalBayar = $subtotal - $diskon;

    <form method="POST">
    Nama: <input type="text" name="nama"><br><br>
    Total Belanja: <input type="number" name="total"><br><br>
    Jenis Member:
    <select name="member">
        <option value="Gold">Gold</option>
        <option value="Silver">Silver</option>
        <option value="Non Member">Non Member</option>
    </select><br><br>
    <input type="submit" value="Hitung">
</form>

    echo "<div class='hasil'>";
    echo "<h3>hasil transaksi</h3>";
    echo "nama pembeli : <b>$nama_pembeli</b><br><br>";
    echo "nama barang : <b>$nama_barang</b><br><br>";
    echo "harga satuan : <b> RP " . number_format($harga, 0, ",", ".") . "</b><br><br>";
    echo "jumlah : <b>$jumlah</b><br><br>";
    echo "subtotal : <b>rp " . number_format($subtotal, 0, ",", ".") . "</b><br><br>";
    echo "diskon : <b>$persenDiskon% (rp " . number_format($diskon, 0, ",", ".") . ")</b><br><br>";
    echo "total bayar : <b>rp " . number_format($totalBayar, 0, ",", ".") . "</b><br><br>";
    echo "</div>";
}
?>

</div>

</body>
</html>