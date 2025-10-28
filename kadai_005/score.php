<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHPの課題を提出しよう</title>
  </head>
  <body>
    <p>
      <?php

      $score1 = 80;
      $score2 = 60;
      $score3 = 55;
      $score4 = 40;
      $score5 = 100;
      $score6 = 25;
      $score7 = 80;
      $score8 = 95;
      $score9 = 30;
      $score10 = 60;

      // 合計金額を算出し、出力する
      $total = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;
      echo '合計値'.$total ;

      // 改行する
      echo'<br>';

      // 平均値を算出する
      $average = $total / 10;
      echo '平均値'.$average;

      ?>
    </p>
  </body>
</html>