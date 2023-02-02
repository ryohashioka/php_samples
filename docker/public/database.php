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
      $host = $_ENV['DB_HOST'] ?? 'localhost';
      $port = $_ENV['DB_PORT'] ?? '5432';
      $dbName = $_ENV['DB_NAME'] ?? 'db';

      $dsn = 'pgsql:dbname=' . $dbName . ';host=' . $host . ';port=' . $port;
      $user = $_ENV['DB_USER'] ?? 'root';
      $password = $_ENV['DB_PASSWORD'] ?? '';

      try {
        $pdo = new PDO($dsn, $user, $password);
        echo 'データベースの接続に成功しました。';  
      } catch (PDOException $e) {
        echo 'データベース接続中にエラーが発生しました。';
        echo '<div style="color:red;">' . $e->getMessage() . '</div>';
      }
    ?>
  </p>
</body>

</html>

