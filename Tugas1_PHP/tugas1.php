<?php
// Definisikan variabel biodata
$nama = "Dzaky Santino";
$umur = 21;
$alamat = "Kota Depok";
$pekerjaan = "Mahasiswa";
$email = "dzakysan2002@gmail.com";


// Definisikan variabel CSS
$css = "
    body {
        font-family: Arial, sans-serif;
    }
    header {
        background-color: #f8f9fa;
        padding: 10px;
        text-align: center;
    }
    main {
        margin: 15px;
    }
    footer {
        background-color: #f8f9fa;
        padding: 10px;
        text-align: center;
        position: fixed;
        width: 100%;
        bottom: 0;
    }
    table {
        margin: auto;
        width: 50%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid #ddd;
        font-size: 20px;
        padding: 10px;
    }
    th {
        background-color: #f2f2f2;
    }
";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Biodata Diri</title>
    <style>
        <?php echo $css; ?>
    </style>
</head>
<body>
    <header>
        <h1>Biodata Diri</h1>
    </header>

    <main>
        <table>
            <tr>
                <th>Nama</th>
                <td><?php echo $nama; ?></td>
            </tr>
            <tr>
                <th>Umur</th>
                <td><?php echo $umur; ?></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><?php echo $alamat; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <th>Pekerjaan</th>
                <td><?php echo $pekerjaan; ?></td>
            </tr>
        </table>
    </main>

    <footer>
        <p>© 2024 Dzaky Santino</p>
    </footer>
</body>
</html>
