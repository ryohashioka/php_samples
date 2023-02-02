<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP+DB</title>
</head>

<body>
  <div>HOST: <?php echo $_ENV['DB_HOST'] ?? 'NO_NAME'; ?></div>
  <div>NAME: <?php echo $_ENV['DB_NAME'] ?? 'NO_NAME'; ?></div>
  <div>USER: <?php echo $_ENV['DB_USER'] ?? 'NO_NAME'; ?></div>
  <p>
    <?php
      if(isset($_ENV['DB_HOST']) && isset($_ENV['DB_NAME']) && isset($_ENV['DB_USER'])) {
        $dsn = 'mysql:dbname=' . $_ENV['DB_NAME'] . ';host=' . $_ENV['DB_HOST'] . ';charset=utf8mb4';
        $user = $_ENV['DB_USER'];
        $password = $_ENV['DB_PASSWORD'];

        try {
          $pdo = new PDO($dsn, $user, $password);
          echo 'データベースの接続に成功しました。';  
        } catch (PDOException $e) {
          echo 'データベース接続中にエラーが発生しました。';
          echo '<div style="color:red;">' . $e->getMessage() . '</div>';
        }
      } else {
        echo '接続情報が足りません。';
      }
    ?>
  </p>
</body>

</html>

