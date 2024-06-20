<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>MyBBS</title>
  </head>
  <body>
    <header>
      <h1>MyBBS</h1>
    </header>
    <h2>投稿一覧</h2>
    <?php
    include 'db.php';

    $sql = "SELECT post_name, post_datetime, post_text FROM posts ORDER BY post_dadetime DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<p><strong>" . htmlspecialchars($row["post_name"]) . "</strong></p>";
        echo "<p>" . nl2br(htmlspecialchars($row["post_text"])) . "</p>";
        echo "</div><hr>";
      }
    } else {
      echo "投稿がありません";
    }

    $conn->close();
    ?>
  </body>
</html>
