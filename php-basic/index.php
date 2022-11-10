<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <!-- PHPの埋め込み -->
    <strong>
      <?php
      $user_name = '橋岡';
      
      echo "こんにちは！{$user_name}さん";

      function hoge($user_name) {
        echo "<br>こんばんは！" . $user_name;
      }
      hoge($user_name);
      ?>
    </strong>

    <div>
      <h3>Pickup Menu</h3>
      <?php
      $menu_json = json_decode(file_get_contents("menu.json"), true);
      $pickup_menu = $menu_json['pageProps']['pickupMenu'];

      echo '<div style="display: flex;">';

      foreach($pickup_menu as $pm) {
        echo '<div style="display: flex; flex-direction: column; text-align: center;">';
        echo '<img src="' . $pm['thumbnail']['url'] . '" width="432" />';
        echo '<span>' . $pm['title'] . '</span>';
        echo '</div>';
      }
      
      echo '</div>';
      ?>
    </div>
    <p>
        <?php
        // 変数$numに0～4までのランダムな整数を代入する
        $num = mt_rand(0, 4);

        // 変数$numの値を出力する（確認用）
        echo $num;

        // 改行する
        echo '<br>';

        // 変数$numの値が4であれば、「大当たりです」という文字列を出力する
         // 変数$numの値が3であれば、「当たりです」という文字列を出力する
        // それ以外のときは、「はずれです」という文字列を出力する
        if ($num === 4) {
            echo '大当たりです';
        } elseif ($num === 3) {
             echo '当たりです';
        } else {
            echo 'はずれです';
        }
        ?>
    </p>

    <ul>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo '<li>' . $i . '</li>';
    }
    ?>
    </ul>
    <script type="text/javascript">
      let hoge = "test"
      console.log(`:::${hoge}:::`);
    </script>
</body>

</html>