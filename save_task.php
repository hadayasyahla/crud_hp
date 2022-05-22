<?php

include('db.php');

if (isset($_POST['Simpan'])) {
  $id = $_POST['id'];
  $nomor = $_POST['merek'];
  $merek = $_POST['tipe'];
  $tipe = $_POST['tahun'];
  $query = "INSERT INTO data(id, merek, tipe, tahun) VALUES ('$id','$merek', '$tipe', '$tahun')";
  $result = pg_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Data Berhasil Di simpan';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
