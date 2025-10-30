<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>PHPの課題11を提出しよう</title>
  </head>
  <body>
    <p>
      <?php
      $onions = ['名前'=> '玉ねぎ','値段'=>200,'産地'=>'北海道'];

      //  連想配列$onionsのキーと値を1つずつ出力する
      foreach($onions as $key=>$value){
        echo "{$key}:{$value}<br>";
      }
      ?>
    </p>
  </body>
</html>