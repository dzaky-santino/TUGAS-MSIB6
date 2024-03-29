<?php
$data_mahasiswa = array(
    array('nomor' => 1, 'nama' => 'Mahasiswa 1', 'nim' => '12345', 'nilai' => 80),
    array('nomor' => 2, 'nama' => 'Mahasiswa 2', 'nim' => '67890', 'nilai' => 70),
    array('nomor' => 3, 'nama' => 'Mahasiswa 3', 'nim' => '54321', 'nilai' => 60),
    array('nomor' => 4, 'nama' => 'Mahasiswa 4', 'nim' => '11234', 'nilai' => 50),
    array('nomor' => 5, 'nama' => 'Mahasiswa 5', 'nim' => '11224', 'nilai' => 40),
    array('nomor' => 6, 'nama' => 'Mahasiswa 6', 'nim' => '11223', 'nilai' => 30),
    array('nomor' => 7, 'nama' => 'Mahasiswa 7', 'nim' => '17234', 'nilai' => 20),
    array('nomor' => 8, 'nama' => 'Mahasiswa 8', 'nim' => '16334', 'nilai' => 10),
    array('nomor' => 9, 'nama' => 'Mahasiswa 9', 'nim' => '17634', 'nilai' => 100),
    array('nomor' => 10, 'nama' => 'Mahasiswa 10', 'nim' => '51234', 'nilai' => 90),
    array('nomor' => 11, 'nama' => 'Mahasiswa 11', 'nim' => '78234', 'nilai' => 80),
    array('nomor' => 12, 'nama' => 'Mahasiswa 12', 'nim' => '99234', 'nilai' => 70),
    array('nomor' => 13, 'nama' => 'Mahasiswa 13', 'nim' => '65234', 'nilai' => 60),
    array('nomor' => 14, 'nama' => 'Mahasiswa 14', 'nim' => '34334', 'nilai' => 50),
    array('nomor' => 15, 'nama' => 'Mahasiswa 15', 'nim' => '87634', 'nilai' => 40),
    array('nomor' => 16, 'nama' => 'Mahasiswa 16', 'nim' => '34534', 'nilai' => 30),
    array('nomor' => 17, 'nama' => 'Mahasiswa 17', 'nim' => '12344', 'nilai' => 20),
    array('nomor' => 18, 'nama' => 'Mahasiswa 18', 'nim' => '18764', 'nilai' => 10),
    array('nomor' => 19, 'nama' => 'Mahasiswa 19', 'nim' => '10984', 'nilai' => 90),
    array('nomor' => 20, 'nama' => 'Mahasiswa 20', 'nim' => '23654', 'nilai' => 90),
    array('nomor' => 21, 'nama' => 'Mahasiswa 21', 'nim' => '85432', 'nilai' => 5),
    array('nomor' => 22, 'nama' => 'Mahasiswa 22', 'nim' => '86534', 'nilai' => 15),
    array('nomor' => 23, 'nama' => 'Mahasiswa 23', 'nim' => '49643', 'nilai' => 25),
    array('nomor' => 24, 'nama' => 'Mahasiswa 24', 'nim' => '05683', 'nilai' => 35),
    array('nomor' => 25, 'nama' => 'Mahasiswa 25', 'nim' => '19283', 'nilai' => 45),
    array('nomor' => 26, 'nama' => 'Mahasiswa 26', 'nim' => '01928', 'nilai' => 55),
    array('nomor' => 27, 'nama' => 'Mahasiswa 27', 'nim' => '92837', 'nilai' => 65),
    array('nomor' => 28, 'nama' => 'Mahasiswa 28', 'nim' => '83736', 'nilai' => 75),
    array('nomor' => 29, 'nama' => 'Mahasiswa 29', 'nim' => '62357', 'nilai' => 85),
    array('nomor' => 30, 'nama' => 'Mahasiswa 30', 'nim' => '77235', 'nilai' => 95),
);

$judul_data = ['NOMOR', 'NAMA', 'NIM', 'NILAI', 'KETERANGAN', 'GRADE', 'PREDIKAT'];

$total_nilai = 0;
$nilai_tertinggi = null;
$nilai_terendah = null;

foreach ($data_mahasiswa as &$mahasiswa) {
    $nilai = $mahasiswa['nilai'];
    $total_nilai += $nilai;

    if ($nilai_tertinggi === null || $nilai > $nilai_tertinggi) {
        $nilai_tertinggi = $nilai;
    }

    if ($nilai_terendah === null || $nilai < $nilai_terendah) {
        $nilai_terendah = $nilai;
    }

    $nilai_tertinggi = max($nilai, $nilai_tertinggi);
    $nilai_terendah = min($nilai, $nilai_terendah);
    $jumlah_mahasiswa = count($data_mahasiswa);
    $rata_rata = $total_nilai / $jumlah_mahasiswa;

    $keterangan = ($nilai >= 65) ? 'Lulus' : 'Gagal';
    $mahasiswa['keterangan'] = $keterangan;

    if ($nilai >= 85) {
        $grade = 'A';
    } elseif ($nilai >= 70) {
        $grade = 'B';
    } elseif ($nilai >= 55) {
        $grade = 'C';
    } elseif ($nilai >= 40) {
        $grade = 'D';
    } else {
        $grade = 'E';
    }

    switch ($grade) {
        case 'A':
            $predikat = 'Memuaskan';
            break;
        case 'B':
            $predikat = 'Bagus';
            break;
        case 'C':
            $predikat = 'Cukup';
            break;
        case 'D':
            $predikat = 'Kurang';
            break;
        default:
            $predikat = 'Buruk';
            break;
    }

    $mahasiswa['grade'] = $grade;
    $mahasiswa['predikat'] = $predikat;
}
unset($mahasiswa);

$keterangan2 = [
    'Nilai Tertinggi' => $nilai_tertinggi,
    'Nilai Terendah' => $nilai_terendah,
    'Nilai Rata-Rata' => $rata_rata,
    'Jumlah Mahasiswa' => $jumlah_mahasiswa,
    'Jumlah Keseluruhan Nilai' => $total_nilai
];


?>

<!DOCTYPE html>
<html>

<head>
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h3 align="center">DAFTAR NILAI MAHASISWA</h3>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <?php
                    foreach ($judul_data as $judul) { ?>
                        <th><?= $judul ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data_mahasiswa as $mahasiswa) {

                ?>
                    <tr>
                        <td><?= $mahasiswa['nomor']; ?></td>
                        <td><?= $mahasiswa['nama']; ?></td>
                        <td><?= $mahasiswa['nim']; ?></td>
                        <td><?= $mahasiswa['nilai']; ?></td>
                        <td><?= $mahasiswa['keterangan']; ?></td>
                        <td><?= $mahasiswa['grade']; ?></td>
                        <td><?= $mahasiswa['predikat']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <?php
                foreach ($keterangan2 as $ket => $hasil) {
                ?>
                    <tr>
                        <th colspan="4"><?= $ket ?></th>
                        <th colspan="3"><?= $hasil ?></th>
                    </tr>
                <?php   }
                ?>

            </tfoot>
        </table>
    </div>
    <footer class="bg-light text-center text-lg-start">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © <?= date("Y"); ?> Dzaky Santino
        </div>
    </footer>
</body>

</html>