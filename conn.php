<?php
  $host = "tuffi.db.elephantsql.com";
  $port = "5432";
  $db = "jxluuylj";
  $user = "jxluuylj";
  $pass = "Z768IlRTJbWrLES4AWOPi5xytgR6ukbe";
  $conn = "host={$host} port={$port} dbname={$db} user={$user} password={$pass}";

  $db_conn = pg_connect($conn) or die("Can't connect to database".pg_last_error());
?>