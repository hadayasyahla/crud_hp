<?php

include('db.php');

if (isset($_POST['Simpan'])) {
  $id = $_POST['id'];
  $merek = $_POST['merek'];
  $tipe = $_POST['tipe'];
  $tahun = $_POST['tahun'];
  $query = "INSERT INTO hp (id, merek, tipe, tahun) VALUES ('$id','$merek', '$tipe', '$tahun')";
  $result = pg_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Data Berhasil Di simpan';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
