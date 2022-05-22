<?php
session_start();

$conn_str = "host= heffalump.db.elephantsql.com " .
    "port=5432 " .
    "user=tmdzqyyu " .
    "dbname=tmdzqyyu " .
    "password=ZHn7civ3mFaU1oLStRXexKw_dgA6-7JL";
$conn = pg_connect($conn_str);

?>
