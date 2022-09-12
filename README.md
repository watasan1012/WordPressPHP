# WordPressPHP

PHP はサーバーサイドの言語

まずは、自分の環境にPHPが入っているか確認する

ターミナルより

```
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

<?php と　?>の間に記述したPHPのコードが実行されます。

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




