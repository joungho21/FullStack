<?php
class MySQLdb {
  private $servername = "localhost";
  private $username = "root";
  private $password = "ErroRi911";
  private $conn;

  public function __construct() {

  }

  public function getConnection() {
    $this->conn = mysqli_connect($this->servername, $this->username, $this->password);
    if ($this->conn->connect_error) {
      die("connection failed" . $this->conn->connect_error);
    }
    echo "connection established";
  }

  public function terminateConnection(){
    mysqli_close($this->conn);
    echo "Termination success";
  }

  public function getData($sqlCommand, $typeLst, $varLst) {
    $st = $this->conn->prepare($sqlCommand, $typeLst);
    $st->execute($varLst);
    $result = $st->get_result();
    while($row = $result->fetch_assoc()) {
    //Unfinished
    }
  }

  public function setData($sqlCommand, $typeLst, $varLst) {
    $st = $this->conn->prepare($sqlCommand, $typeLst);
    $st->execute($varLst);
  }



}
?>
