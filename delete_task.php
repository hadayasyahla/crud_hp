<?php

include("db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM hp WHERE id = $id";
  $result = pg_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Data hp Berhasil Di Hapus';
  $_SESSION['message_type'] = 'danger';
  header('Location: index.php');
}

?>
