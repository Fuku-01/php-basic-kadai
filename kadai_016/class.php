<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>PHP基礎編</title>
  </head>
  <body>
    <p>
      <?php
      //  クラス Food を定義する
      class Food{
        //  プロパティを定義する
        private $name;
        private $price;

        //  コンストラクタを定義する
        public function __construct(string $name,int $price){
          $this->name = $name;
          $this->price = $price;
        }

        //  メソッドを定義する。
        public function show_price(){
          echo $this->price .'<br>';
        }
      }

      //  インスタンス化する
      $foods = new Food('potato',250);
      
      //  インスタンス化した$foodsのプロパティを出力する
      print_r($foods);
      //  show_priceを出力する
      echo $foods->show_price();

      //  クラス Animalを定義する
      class Animal{
        private $name;
        private $height;
        private $weight;

        //  コンストラクタを定義する
        public function __construct(string $name,int $height,int $weight){
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
        }

        //  メソッドを定義する
        public function show_height(){
          echo $this->height .'<br>';
        }
      }

      //  インスタンス化する
      $animals = new Animal('dog',60,5000);
      //  インスタンス化した$wanのプロパテイィを出力する
      print_r($animals);

      //  show_heightを出力する
      echo $animals->show_height();

      ?>
    </p>
  </body>
</html>