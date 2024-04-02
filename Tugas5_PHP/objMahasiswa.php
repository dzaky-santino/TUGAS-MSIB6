<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Table Nilai Ujian Mahasiswa</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
</head>
<body>
  <form method="post" action="objMahasiswa.php">
    <div class="container mt-5">
      <div class="center-frame">
        <div class="form-table-container">
          <h2 align="center">From Nilai Ujian</h2>
          <div class="profile-picture" align="center">
          </div>
          <div class="form-group row">
            <label for="nim" class="col-4 col-form-label mb-3">NIM :</label>
            <div class="col-8">
              <input id="nim" name="nim" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="nama" class="col-4 col-form-label mb-3">Nama :</label>
            <div class="col-8">
              <input id="nama" name="nama" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="kuliah" class="col-4 col-form-label mb-3">Kuliah :</label>
            <div class="col-8">
              <input id="kuliah" name="kuliah" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="matakuliah" class="col-4 col-form-label mb-3">Mata Kuliah :</label>
            <div class="col-8">
              <select id="matakuliah" name="matakuliah" class="form-select">
                <option selected>--- Pilih Mata Kuliah ---</option>
                <option value="PHP">PHP</option>
                <option value="UI/UX">UI/UX</option>
                <option value="LARAVEL">Laravel</option>
                <option value="CSS">CSS</option>
                <option value="HTML">HTML</option>
              </select>

            </div>
          </div>
          <div class="form-group row">
            <label for="nilai" class="col-4 col-form-label mb-3">Nilai :</label>
            <div class="col-8">
              <input id="nilai" name="nilai" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
  </form>
  <br>
  <h3 align="center">DATA NILAI UJIAN MAHASISWA </h3>
  <?php
  require_once 'Mahasiswa.php';

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // tangkap data dari form
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kuliah = $_POST['kuliah'];
    $matakuliah = $_POST['matakuliah'];
    $nilai = $_POST['nilai'];

    // buat objek
    $ns1 = new Mahasiswa($nim, $nama, $kuliah, $matakuliah, $nilai);

    // cetak hasil dengan tabel
    echo '<table class="table table-bordered">';
    echo '<thead class="thead-dark"><tr><th>NIM</th><th>Nama</th><th>Kuliah</th><th>Mata Kuliah</th><th>Nilai</th><th>Grade</th><th>Predikat</th><th>Status</th></tr></thead>';
    echo '<tr>';
    echo '<td>' . $ns1->nim . '</td>';
    echo '<td>' . $ns1->nama . '</td>';
    echo '<td>' . $ns1->kuliah . '</td>';
    echo '<td>' . $ns1->matakuliah . '</td>';
    echo '<td>' . $ns1->nilai . '</td>';
    echo '<td>' . $ns1->grade . '</td>';
    echo '<td>' . $ns1->predikat . '</td>';
    echo '<td>' . $ns1->status . '</td>';
    echo '</tr>';
    echo '</table>';
  }
  ?>

  </div>
  <div>
    <a href="objMahasiswa.php" class="btn btn-primary">Kembali</a>
  </div>
</body>

</html>