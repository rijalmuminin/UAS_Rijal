<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>UAS RIJAL</title>
</head>

<body>
    <div class="text-center">
        <img src="images.png" class="rounded" alt="...">
    </div>
    <div class="container">
        <h1 class="text-center">PENGGAJIHAN <br> GURU/KARYAWAN/YAYASAN ASSALAAM</h1>
        <form action="" method="post">
            <div class="card">
                <div class="card-header">
                    Data Penggajihan
                </div>
                <div class="card-body">
                    <p>No</p>
                    <input type="text" name="no" id="" placeholder="No" class="form-control">
                    <br>
                    <p>Nama</p>
                    <input type="text" name="nama" id="" placeholder="Nama" class="form-control">
                    <br>
                    <p>Unit Pendidikan</p>
                    <select name="unit" id="" class="form-select">
                        <option value="">Pilih Unit Pendidikan</option>
                        <option value="TK">TK</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="SMK">SMK</option>
                    </select>
                    <br>
                    <p>Tanggal Gaji</p>
                    <input type="date" name="tanggal" id="" class="form-control">
                    <br>

                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h2 class="text-center">Gaji</h2>
                                <p>Jabatan</p>
                                <select name="jabatan" id="" class="form-select">
                                    <option value="">Pilih Jabatan</option>
                                    <option value="kepala sekolah">Kepala Sekolah</option>
                                    <option value="wakasek">Wakasek</option>
                                    <option value="guru">Guru</option>
                                    <option value="karyawan">Karyawan</option>
                                </select>
                                <br>
                                <p>Lama Kerja</p>
                                <input type="text" name="lama" id="" placeholder="Lama Kerja" class="form-control">
                                <br>
                                <p>Status Kerja</p>
                                <select name="status" id="" class="form-select">
                                    <option value="">Pilih Status Kerja</option>
                                    <option value="Tetap">Tetap</option>
                                    <option value="Kontak">Kontrak</option>
                                </select>
                                <br>
                            </div>
                            <div class="col">
                                <h2 class="text-center">Potongan</h2>
                                <p>BPJS</p>
                                <input type="number" name="bpjs" id="" placeholder="BPJS" class="form-control">
                                <br>
                                <p>Pinjaman</p>
                                <input type="number" name="pinjaman" id="" placeholder="Pinjaman" class="form-control">
                                <br>
                                <p>Cicilan</p>
                                <input type="number" name="cicilan" id="" placeholder="Cicilan" class="form-control">
                                <br>
                                <p>Infaq</p>
                                <input type="number" name="infaq" id="" placeholder="infaq" class="form-control">
                                <br>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary" name="simpan">Proses</button>
                            </div>
                        </div>
        </form>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>

<?php

if (isset($_POST['simpan'])) {
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $unit = $_POST['unit'];
    $tanggal = $_POST['tanggal'];
    $jabatan = $_POST['jabatan'];
    $lama = $_POST['lama'];
    $status = $_POST['status'];
    $bpjs = $_POST['bpjs'];
    $pinjaman = $_POST['pinjaman'];
    $cicilan = $_POST['cicilan'];
    $infaq = $_POST['infaq'];
    

if ($jabatan == "kepala sekolah") {
    $gaji = 10000000;
} elseif ($jabatan == "wakasek") {
    $gaji = 7000000;
} elseif ($jabatan == "guru") {
    $gaji = 5000000;
} elseif ($jabatan == "karyawan") {
    $gaji = 2500000;
}
    if ($status == "Tetap") {
        $bonus = 1000000;
    } elseif ($status == "Kontrak") {
        $bonus = 0;
    } else{
        echo "eror!";
    }
    $gajibersih = ($gaji + $bonus) - ($bpjs + $pinjaman + $cicilan + $infaq);

    class gaji{
  public function struk($no2,$nama2,$unit2,$tanggal2,$jabatan2,$gaji2,$lama2,$status2,$bonus2,$bpjs2,$pinjaman2,$cicilan2,$infaq2,$gajibersih2){

echo "<table align='center'>";
echo "<tr>
<td>No</td>
<td>:</td>
<td>$no2</td>
</tr>";
echo "<tr>
<td>Nama</td>
<td>:</td>
<td>$nama2</td>
</tr>";
echo "<tr>
<td>Unit pendidikan</td>
<td>:</td>
<td>$unit2</td>
</tr>";
echo "<tr>
<td>Tanggal gaji</td>
<td>:</td>
<td>$tanggal2</td>
</tr>";
echo "<tr>
<td>Jabatan</td>
<td>:</td>
<td>$jabatan2</td>
</tr>";
echo "<tr>
<td>Gaji</td>
<td>:</td>
<td>$gaji2</td>
</tr>";
echo "<tr>
<td>Lama kerja</td>
<td>:</td>
<td>$lama2</td>
</tr>";
echo "<tr>
<td>Status kerja</td>
<td>:</td>
<td>$status2</td>
</tr>";
echo "<tr>
<td>Bonus</td>
<td>:</td>
<td>$bonus2</td>
</tr>";
echo "<tr>
<td>BPJS</td>
<td>:</td>
<td>$bpjs2</td>
</tr>";
echo "<tr>
<td>Pinjaman</td>
<td>:</td>
<td>$pinjaman2</td>
</tr>";
echo "<tr>
<td>Cicilan</td>
<td>:</td>
<td>$cicilan2</td>
</tr>";
echo "<tr>
<td>Infaq</td>
<td>:</td>
<td>$infaq2</td>
</tr>";
echo "<tr>
<td>Gaji bersih</td>
<td>:</td>
<td>$gajibersih2</td>
</tr>
</table>";
    }
    }
    $hasil = new gaji();
    echo "<div class='card mt-5 ms-5 me-5 ps-5 pe-5'><div class='card-body fs-3'>";
    echo "<h2 class='text-center'>STRUK GAJI</h2>";
    $hasil->struk($no,$nama,$unit,$tanggal,$jabatan,$gaji,$lama,$status,$bonus,$bpjs,$pinjaman,$cicilan,$infaq,$gajibersih);
    echo "</div></div>";
}
?>