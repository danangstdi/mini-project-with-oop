<?php
class ArrayData {
  private $data;
  public function __construct() {
    $this->data = array();
  }
  public function addData($ket, $value) {
    $this->data[$ket] = $value;
  }
  public function getData() {
    return $this->data;
  }
}

$array = new ArrayData();
$array->addData("Nama", "Danang Setiadi");
$array->addData("Nim", "222355201036");
$array->addData("Fakultas", "Teknik");
$array->addData("Prodi", "Teknik Informatika");
$data = $array->getData();

echo "<table border=1 cellpadding=10 cellspacing=0>";
echo "<tr style=\"display: flex; flex-direction:column;\">";

foreach ($data as $key => $value) {
  echo "<td>" . $key . ": " . $value . "</td>";
}

echo "</tr>";
echo "</table>";

