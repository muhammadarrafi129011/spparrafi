<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $NO = $_POST['NO'];
  $id = $_POST['id'];
	$username		= $_POST['username'];
	$password   	= $_POST['password'];
	$nama_petugas	= $_POST['nama_petugas'];
	$level	= $_POST['level'];
  //cek dulu jika merubah gambar produk jalankan coding ini
  
                    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
                   $query  = "UPDATE petugas SET username = 'petugas' WHERE id_petugas = '123'";
				   $query  = "UPDATE petugas SET password = '290901' WHERE id_petugas = '123'";
				   $query  = "UPDATE petugas SET nama_petugas = 'rafi' WHERE id_petugas = '123'";
				   $query  = "UPDATE petugas SET level = 'petugas' WHERE id_petugas = '123'";
                    $result = mysqli_query($koneksi, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil diubah.');window.location='petugas.php';</script>";
                    }
              
			  
			  ?>