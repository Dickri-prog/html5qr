<?php


if (isset($_GET['id'])) {
  $txt = $_GET['id'];

  if ($txt != "") {
    $myfile = file_put_contents('id_order.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
    echo json_encode([
      "code" => 200,
      "message" => "success"
    ]);
  }else {
    echo json_encode([
      "code" => 400,
      "message" => "Empty Value!!!"
    ]);
  }
}
