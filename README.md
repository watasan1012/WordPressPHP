# WordPressPHP

PHP はサーバーサイドの言語

まずは、自分の環境にPHPが入っているか確認する

ターミナルより

```shell
% php -v
```

結果いかのような内容が表示されればPHPはんストール済みです

PHP 8.1.8 (cli) (built: Jul  8 2022 XX:XX:XX) (NTS)

記載がない場合は、PHPをインストールします

## PHPファイルを作成

wordpressphpディレクトリを作成するその中にphpファイルを作成する

index.php を作成する

PHPには、ファイルの拡張子が決まっています。```.php``` の部分がPHPの拡張子です。

## PHPファイルに記述していく

作成したindex.phpファイルにPHPのコードを記載していく

`<?php echo 'ここにPHPのコードを記載していく'; ?>`

`<?php` と　`?>` の間に記述したPHPのコードが実行されます。

`echo`　は、`''` シングルクォートで挟んだ内容を表示します。PHPでは、';' セミコロンを入れることで文の終わりを表ます。

実行してみましょう

```php:index.php
<?php
    echo 'ここにPHPのコードを記載していく';
?>
```

さて、本記事の冒頭でもPHPはサーバー言語と記述しましたので

サーバーをターミナルから起動してブラウザーから確認してみましょう。

```shell
php -S localhost:8000
```

[Mon Sep XX XX:XX:XX 2022] PHP 8.1.8 Development Server (http://localhost:8000) started

と表示されるので、ブラウザーから

[http://localhost:8000](http://localhost:8000)

を表示します。

<img width="1182" alt="wordpressnew_1-min" src="https://user-images.githubusercontent.com/103015617/189565590-ddc24464-8f45-4d15-b603-1ae691b026bf.png">

こちらが表示されたら成功です。

ターミナルからローカルPHPサーバーを停止してみましょう

```shell
control + c
```

macOSからローカルでPHPを開発するには、PHPファイルを用意する、PHPコードを書く、ローカルサーバーを起動する、ブラウザーから確認する流れになります。

## コメント

PHPでは、`/* ここはコメント */`　`// この行はコメント` があり、 `/*` と `*/` で挟んだ部分に書いた内容がコメントとして、PHPは認識されません。
`//`のあとの文字列　一行もコメントになります。

コメントは、開発する上で解説を記載することが多いです。

```php:index.php
<?php
    // echo文はブラウザーに文字を表示します
    echo 'ここにPHPのコードを記載していく';
?>
```

## 文字列

```php
echo '文字として表示します';
```

文字列は、シングルクォート　ダブルクォート　で囲むと文字列として扱うことができます

シングルクォートとダブルクォートで囲む結果は同じなのでしょうか？

```php:index.php
<?php
    echo 'シングル\nクォート';
    echo '<br>';

    echo "ダブル\nクォート";
?>
```

シングルクォーテーションの場合は特殊文字が、そのまま文字列として出力されています

<img width="1157" alt="スクリーンショット 2022-09-12 13 13 39-min" src="https://user-images.githubusercontent.com/103015617/189572782-a8a74e95-e214-4e7f-ba69-6b7533a47114.png">

シングルクォートとダブルクォートで特殊文字を挟むと結果が違うということを理解してください

## 数値

数値を表示、計算することができます。

ここで、シングルクォートで囲んだ数値をみてみましょう

- 文字列としての数値

```php:index.html
<?php
    echo '1 + 2';
?>
```

結果

1 + 2

と表示されることがわかります

- 数値

```php:index.html
<?php
    echo 1 + 2;
?>
```

結果

3

計算された結果が表示されました。数値は、シングルクォート　ダブルクォートでは挟みません

## 変数

PHP には、変数があり、値を入れることができる箱を用意できます

```php:index.html
<?php
$test = 4;

echo $test;
?>
```

## 文字列の連結

連結演算子 `.` をすることで文を連結することができます

```php:index.php
<php
   $name = 'wata';
   echo $name . 'さんようこそ';
?>
```

結果

wataさんようこそ

と表示されます。

## 配列

ここまで、変数という箱について解説しました。配列は変数を一つにまとめたものです。

```php
<?php 
/* --
ハンガーショップの店舗リスト

-- */

?>

```





## 条件分岐

## 関数



