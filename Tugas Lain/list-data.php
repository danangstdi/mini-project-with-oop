<?php
class ListMahasiswa {
  private $data;
  public function __construct() {
    $this->data = array();
  } 
  public function addData($item) {
    $this->data[] = $item;
  }
  public function getData() {
    return $this->data;
  }
}

$row = new ListMahasiswa();
$row->addData("No");
$row->addData("Nama");
$row->addData("Nim");
$row->addData("Program Studi");
$rows = $row->getData();

$list1 = new ListMahasiswa();
$list1->addData("1");
$list1->addData("Danang");
$list1->addData("222355201036");
$list1->addData("Teknik Informatika");
$isi = $list1->getData();

$list2 = new ListMahasiswa();
$list2->addData("2");
$list2->addData("Setiadi");
$list2->addData("222355201037");
$list2->addData("Teknik Sipil");
$isi2 = $list2->getData();

echo "<table border=1 cellpadding=10 cellspacing=0>";
echo "<tr>";

foreach ($rows as $item) {
  echo "<th>" . $item . "</th>";
}
echo "</tr>";

echo "<tr>";
foreach ($isi as $item) {
  echo "<td>" . $item . "</td>";
}
echo "</tr>";

echo "<tr>";
foreach ($isi2 as $item) {
  echo "<td>" . $item . "</td>";
}

echo "</tr>";
echo "</table>";
