<!DOCTYPE html>
<html>
<head>
    <title>Kasir</title>

    <style>
        body {
            font-family: Arial;
            background-color: #f2f2f3;
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
        }
    </style>
</head>

<body>

<div class="kotak">

    <h1>ulangan</h1>
    <p>masukin data beli ny</p>

    <form method="post">

        <label>Nama Barang</label>
        <input type="text" name="nama_barang" required>

        <label>Harga</label>
        <input type="number" name="harga" required>

        <label>Jumlah Barang</label>
        <input type="number" name="jumlah" required>

        <label>Nama Pembeli</label>
        <input type="text" name="nama_pelanggan" required>

        <label>Member</label>
        <select name="member" required>
            <option value="orang mid">orang mid</option>
            <option value="orang have">orang have</option>
        </select>

        <button type="submit" name="submit">hasil</button>

    </form>

<?php

if (isset($_POST['submit'])) {

    $nama_barang = strtolower($_POST["nama_barang"]);
    $harga = $_POST["harga"];
    $jumlah = $_POST["jumlah"];
    $nama_pembeli = strtolower($_POST["nama_pelanggan"]);
    $member = $_POST["member"];

    $subtotal = $harga * $jumlah;

    if ($member == "orang have") {
        $persenDiskon = 50;
    } elseif ($member == "orang mid") {
        $persenDiskon = 20;
    }

    $diskon = $subtotal * ($persenDiskon / 100);
    $totalBayar = $subtotal - $diskon;

    echo "<div class='hasil'>";
    echo "<h3>Hasil</h3>";

    echo "Nama pembeli : <b>$nama_pembeli</b><br><br>";
    echo "Nama barang : <b>$nama_barang</b><br><br>";
    echo "Harga satuan : <b>Rp " . number_format($harga, 0, ",", ".") . "</b><br><br>";
    echo "Jumlah : <b>$jumlah</b><br><br>";
    echo "Member : <b>$member</b><br><br>";
    echo "Subtotal : <b>Rp " . number_format($subtotal, 0, ",", ".") . "</b><br><br>";
    echo "Diskon : <b>$persenDiskon% (Rp " . number_format($diskon, 0, ",", ".") . ")</b><br><br>";
    echo "Total bayar : <b>Rp " . number_format($totalBayar, 0, ",", ".") . "</b><br><br>";

    echo "</div>";
}

?>

</div>

</body>
</html>