<?php
/*
* step 1
* PHPを表示する
*/

echo '# step 1 phpを表示する<br><br>';

/* <?php ● ?> ●の部分にPHPの処理を書いていく */

/*
* step 2
* コメント
*/

echo '# step 2 コメント<br><br>';

echo '/*  */ で挟んだ中の文字列がコメントになります<br>';

/* ここはコメントです */

echo '// 移行の文字列がコメントになります<br>';

// この行はコメントです

echo '<br>';


/*
* step 3
* 文字列
*/

echo '# step 3 文字列<br><br>';

echo 'シングル\nクォート<br>';

echo "ダブル\nクォート<br><br>";

echo "文字列はクォーテーションで挟む必要があり、シングルクォーテーションとダブルクォーテーションでは結果が変わります。<br><br>";

/*
* step 4
* 数値
*/

echo '# step 4 数値<br><br>';

echo 1 + 2;
echo '<br><br>';

echo '数値はシングルクォーテーションで挟みません。計算結果の3が表示される<br>';

echo '一方' . '1 + 2' . 'クォーテーションで挟むと文字として扱われてそのまま表示される<br><br>';

/*
* step 5
* 変数
*/

echo '# step 5 変数<br><br>';

$test = '東京';

echo $test;

echo '<br><br>';

echo '変数は、$から続く文字列で識別します。変数には値を入れることができます<br><br>';


/* 
* step 6
* 連結演算子
*/

echo '# step 6 連結演算子<br><br>';

$name = '有楽町';
echo $name . '駅にいます';
echo '<br><br>';

echo '[.] で文字を連結することができます<br><br>';

/* 
* step 7
* 配列
*/
/**
 * 山手線路線図リスト
 */

echo '# step 7 配列<br><br>';

echo '## 配列の初期化'.'<br><br>';

$stations_1 = array(); 

$stations_2 = [];

echo '空の配列を作成します'.'<br><br>';

echo '配列の作成方法は、二つありarrayと[]で囲む方法があります。<br><br>';

var_dump($stations_1);

echo '<br><br>';

var_dump($stations_2);

echo '<br><br>';

echo '空の配列を表示するには、var_dump を利用することで確認することができます。'.'<br><br>';

echo '## 配列の作成(添字配列)'.'<br><br>';

$stations_3 = array('新橋', '浜松町', '田町');

$stations_4 = ['高輪ゲートウェイ', '品川', '大崎'];

echo '添字配列とは、あらかじめ、要素(新橋などの)を指定して代入することができます'.'<br><br>';

echo '配列の作成は近年[]が利用されることが多いがwordpressではarray関数を利用することが多い。<br><br>';

echo '## 配列の要素一つを表示する<br><br>';

echo '### print '.'<br><br>';

print $stations_3[0];

echo '<br><br>';

echo 'print $配列名[index];とすることで、ブラウザーに表示することができます。<br><br>';

echo 'index配列と呼ばれ、整数をキーとする配列です。indexの部分に0から順に指定することで表示することができます<br><br>';

echo 'PHPの配列では、インデックスをキーとして、キーと値をペアに、要素を取得します'.'<br><br>';

echo 'printは、言語構造です'.'<br><br>';

echo '言語構造は、PHPが最初から用意しています。'.'<br><br>';

echo 'printには、一個の文字列を表示します。printは()が不要です。戻り値があり1が戻ります。式に使うことができます'.'<br><br>';

echo '### echo '.'<br><br>';

echo $stations_3[1];

echo '<br><br>';

echo 'echo $配列名[index]; とすることで、ブラウザーに表示することができます。<br><br>';

echo 'echoも、言語構造です'.'<br><br>';

echo 'echoは、1つ以上の文字列を表示します。'.'<br><br>';

echo '## 配列の要素全て表示する<br><br>';

echo '### print_r '.'<br><br>';

print_r($stations_3);

echo '<br><br>';

echo 'print_r(配列名); とすることで、ブラウザーに表示することができます。<br><br>';

echo 'print_rは、指定した変数に関する情報を解りやすく出力します<br><br>';

echo 'print_r(配列名[index]); とするうことで一つ要素を表示することもできます。'.'<br><br>';

echo '<br><br>';

echo '### var_export'.'<br><br>';
var_export($stations_4[0]);
echo '<br><br>';

echo 'var_export(配列名[index]); とするうことで一つ要素を表示することもできます。'.'<br><br>';

echo '### var_dump'.'<br><br>';

var_dump($stations_4[0]);

echo 'var_dumpは、詳しく情報を表示します'.'<br><br>';

echo '<br><br>';





// echo '配列を表示するには、配列名[inxex] と指定することで配列を指定することができます。indexは、0から始まる数字を指定します。<br>';
// echo 'print_rまたは、echoを使うことで表示することができる' . '<br><br>';
// echo '配列と比べて、変数の場合、項目ごとに変数を用意する必要があるので配列を使用することが多いです。<br>';
// echo '配列の場合、変数が一つにできる利点があります<br><br>';

// echo '## 配列の要素を全て表示する<br><br>';

// $stations_3 = array('五反田', '目黒', '恵比寿');

// foreach ($stations_3 as $stations_4) {
//     echo $stations_4;
// }

// echo '<br><br>';

// echo '配列の要素を表示するには、foreach( $配列変数名 as $各要素を入れる変数) を利用してループさせて一個づつ表示させることができます<br><br>';

// echo '## 配列に値を追加する<br><br>';


// $stations_5 = [];

// print_r ($stations_5);

// echo '<br>';

// // Array ( ) 空の配列が準備された

// array_push($stations_5, '渋谷');

// print_r ($stations_5);

// echo '<br><br>';

// echo '## 配列から特定の要素を削除する(1)indexを指定すして削除<br><br>';

// echo 'array_splice(削除対象配列,切り取り開始Index, 切り取り数)を利用して削除する';




// echo '配列から特定の要素を削除する(2)indexを指定すして削除<br>';

// echo '配列から特定の要素を削除する(3)要素を指定して削除する<br>';

// echo '削除後に、indexを詰める作業が必要';

