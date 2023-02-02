<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP+DB</title>
</head>

<body>
  <p>
    <div>HOST: <?php echo $_ENV['DB_HOST'] ?? 'NO_NAME'; ?></div>
    <div>NAME: <?php echo $_ENV['DB_NAME'] ?? 'NO_NAME'; ?></div>
    <div>USER: <?php echo $_ENV['DB_USER'] ?? 'NO_NAME'; ?></div>
    <?php

      // $pdo = new PDO($dsn, $user, $password);
      echo 'データベースの接続に成功しました。';
    ?>
  </p>
</body>

</html>

