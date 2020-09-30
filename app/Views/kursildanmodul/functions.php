<?php

//koneksi ke dalam database
$conn = mysqli_connect("localhost", "root", "", "upt");


function query($query){
    global $conn;
    $result =mysqli_query($conn,$query);
    $rows =[];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah1($data){
  global $conn;
  $tahun =htmlspecialchars($data["tahun"]);

//upload gambar
  $jabatan = upload1();

  $jangkauan = upload2();
  if ( !$jangkauan) {
    return false;
  }
  $jk = upload3();
  if ( !$jk) {
    return false;
  }

  $kab = upload4();
  if ( !$kab) {
    return false;
  }

  $pelatihan = upload5();
  if ( !$pelatihan) {
    return false;
  }
    //query Menambahkan Data
    $query="INSERT INTO diagram_coba VALUES('$tahun','$jabatan','$jangkauan','$jk','$kab','$pelatihan')";

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);

}

function upload1(){
if(!isset($_FILES['jabatan']['name'])) return null;
$namaFile    = $_FILES['jabatan']['name'];
$ukuranFiles = $_FILES['jabatan']['size'];
$error       = $_FILES['jabatan']['error'];
$tmpName     = $_FILES['jabatan']['tmp_name'];

//Cek yang diupload Hanya gambar

  $ekstensiGambarValid = ['jpg','jpeg','png'];
  $ekstensiGambar = explode('.',$namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));
  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    echo "<script>
          alert('Yang Anda Upload Bukan Gambar!');
          <script>";
  }

//lolos pengecekan, gambar siap diupload
move_uploaded_file($tmpName,'../img_diagram/'. $namaFile);

return $namaFile;

}

function upload2(){

$namaFile    = $_FILES['jangkauan']['name'];
$ukuranFiles = $_FILES['jangkauan']['size'];
$error       = $_FILES['jangkauan']['error'];
$tmpName     = $_FILES['jangkauan']['tmp_name'];

//Cek yang diupload Hanya gambar

  $ekstensiGambarValid = ['jpg','jpeg','png'];
  $ekstensiGambar = explode('.',$namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));
  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    echo "<script>
          alert('Yang Anda Upload Bukan Gambar!');
          <script>";
          return false;
  }

//lolos pengecekan, gambar siap diupload
move_uploaded_file($tmpName,'../img_diagram/'. $namaFile);

return $namaFile;

}

function upload3(){

$namaFile    = $_FILES['jk']['name'];
$ukuranFiles = $_FILES['jk']['size'];
$error       = $_FILES['jk']['error'];
$tmpName     = $_FILES['jk']['tmp_name'];

//Cek yang diupload Hanya gambar

  $ekstensiGambarValid = ['jpg','jpeg','png'];
  $ekstensiGambar = explode('.',$namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));
  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    echo "<script>
          alert('Yang Anda Upload Bukan Gambar!');
          <script>";
          return false;
  }

//lolos pengecekan, gambar siap diupload
move_uploaded_file($tmpName,'../img_diagram/'. $namaFile);

return $namaFile;

}

function upload4(){

$namaFile    = $_FILES['kab_kota']['name'];
$ukuranFiles = $_FILES['kab_kota']['size'];
$error       = $_FILES['kab_kota']['error'];
$tmpName     = $_FILES['kab_kota']['tmp_name'];

//Cek yang diupload Hanya gambar

  $ekstensiGambarValid = ['jpg','jpeg','png'];
  $ekstensiGambar = explode('.',$namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));
  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    echo "<script>
          alert('Yang Anda Upload Bukan Gambar!');
          <script>";
          return false;
  }

//lolos pengecekan, gambar siap diupload
move_uploaded_file($tmpName,'../img_diagram/'. $namaFile);

return $namaFile;

}

function upload5(){

$namaFile    = $_FILES['pelatihan']['name'];
$ukuranFiles = $_FILES['pelatihan']['size'];
$error       = $_FILES['pelatihan']['error'];
$tmpName     = $_FILES['pelatihan']['tmp_name'];

//Cek yang diupload Hanya gambar

  $ekstensiGambarValid = ['jpg','jpeg','png'];
  $ekstensiGambar = explode('.',$namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));
  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    echo "<script>
          alert('Yang Anda Upload Bukan Gambar!');
          <script>";
          return false;
  }

//lolos pengecekan, gambar siap diupload
move_uploaded_file($tmpName,'../img_diagram/'. $namaFile);

return $namaFile;

}

function hapus($Nama){
    global $conn;
    mysqli_query($conn,"DELETE FROM diagram_coba WHERE Nama ='$Nama'");

    return mysqli_affected_rows($conn);
}


function ubah($data){
    global $conn;
    $no =htmlspecialchars($data["No"]);
    $nama =htmlspecialchars($data["Nama"]);
    $biser =htmlspecialchars($data["Bidang_Sertifikat"]);
    $instansi =htmlspecialchars($data["Instansi_Kop_UKM"]);
    $serti =htmlspecialchars($data["No_Sertifikat"]);

      //query Menambahkan Data
      $query="UPDATE diagram_coba SET
              No = '$no',
              Nama='$nama',
              Bidang_Sertifikat='$biser',
              Instansi_Kop_UKM='$instansi',
              No_Sertifikat='$serti',
              WHERE Nama=$nama";

      mysqli_query($conn,$query);

      return mysqli_affected_rows($conn);
}
?>
