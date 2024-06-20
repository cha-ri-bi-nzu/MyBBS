<?php
include 'db.php';

$post_name = $_POST['post_name'];
$post_text = $_POST['post_text'];

$sql = "INSERT INTO posts (post_name, post_text) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $post_name, $post_text);

if ($stmt->execute()) {
  echo "新しいレコードが正常に作成されました";
} else {
  echo "エラー：" . $stmt->error;
}

$stmt->close();
$conn->close();

header("Location: index.php");
exit();
?>