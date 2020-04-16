<?php
error_reporting(E_ERROR | E_PARSE);
if (@include 'MySQLdb.php') {
  $test = new MySQLdb();
  $test->getConnection();
  $test->terminateConnection();
}
else {
  echo "No MySQLdb.php";
}



 ?>
