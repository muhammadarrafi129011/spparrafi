 <?php
include 'koneksi.php';
$nisn = $_GET["nisn"];
$nis = $_GET['nis'];
$nama = ($_GET['nama']);
$id_kelas = ($_GET['id_kelas']);
$alamat = ($_GET['alamat']);
$no_tlp = ($_GET['no_tlp']);
$id_spp = ($_GET['id_spp']);

//mengambil id yang ingin dihapus

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM siswa WHERE nisn='$nisn'";
    $hasil_query = mysqli_query($koneksi, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($koneksi).
       " - ".mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='siswa.php';</script>";
    }