<!DOCTYPE html>
<html>
<head>
    <title>Form Belanja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <?php
    function format_rupiah($angka){
        $hasil_rupiah = "Rp " . number_format($angka,0,',');
        return $hasil_rupiah;
    }

    $daftar_produk = array(
        'TV' => 3000000,
        'KULKAS' => 4000000,  
        'AC' => 5000000,
        'MESIN CUCI' => 3500000
    );
    ?>

    <form method="post" class="mb-3">
        <div class="mb-3">
            <label for="nama_pelanggan" class="form-label">Nama Pelanggan:</label>
            <input type="text" class="form-control" name="nama_pelanggan">
        </div>
        <div class="mb-3">
            <label for="pilihan_produk" class="form-label">Produk Pilihan:</label>
            <select class="form-select" name="pilihan_produk">
                <?php
                foreach ($daftar_produk as $produk => $harga) {
                    echo "<option value='$produk'>$produk</option>";
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="jumlah_beli" class="form-label">Jumlah Beli:</label>
            <input type="number" class="form-control" id="jumlah_beli" name="jumlah_beli">
        </div>
        <button type="submit" class="btn btn-primary">Beli</button>
        <button type="reset" class="btn btn-secondary">Batal</button>
    </form>


    <h2>Harga Produk:</h2>
    <ul class="list-group mb-3">
        <?php
        foreach ($daftar_produk as $produk => $harga) {
            echo "<li class='list-group-item'>$produk: " . format_rupiah($harga) . "</li>";
        }
        ?>
    </ul>

    <?php
    if (isset($_POST['nama_pelanggan']) && isset($_POST['pilihan_produk']) && isset($_POST['jumlah_beli'])) {
        $nama_pelanggan = $_POST['nama_pelanggan'];
        $pilihan_produk = $_POST['pilihan_produk'];
        $jumlah_beli = $_POST['jumlah_beli'];

        $harga_satuan = $daftar_produk[$pilihan_produk];
        $total_belanja = $jumlah_beli * $harga_satuan;
        $diskon = 0.2 * $total_belanja;
        $ppn = 0.1 * ($total_belanja - $diskon);
        $harga_bersih = ($total_belanja - $diskon) + $ppn;

        echo "<div class='alert alert-success'>";
        echo "Nama Pelanggan: " . $nama_pelanggan . "<br>";
        echo "Produk yang Dipilih: " . $pilihan_produk . "<br>";
        echo "Jumlah Beli: " . $jumlah_beli . "<br>";
        echo "Harga Satuan: " . format_rupiah($harga_satuan) . "<br>";
        echo "Total Belanja: " . format_rupiah($total_belanja) . "<br>";
        echo "Diskon: " . format_rupiah($diskon) . "<br>";
        echo "PPN: " . format_rupiah($ppn) . "<br>";
        echo "Harga Bersih: " . format_rupiah($harga_bersih) . "<br>";
        echo "</div>";
    }
    ?>    
</div>
</body>
</html>
