<?php
$servername = "localhost";
$username = "ppfpkadai_kouya";
$password = "193th62kc3kijou";
$dbname = "ppfpkadai_test";

$conn = new mysqli($servername, $username, $password, &$dbname);

if ($conn->connect_error) {
  die("接続失敗：" . $conn->connect_error);
}
?>
