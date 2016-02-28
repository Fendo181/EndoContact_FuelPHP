<?php


print("Hello wold!");

/*
コメント「アウト
改行

"<br \>"
*/

//終了タグは消したほうがいい

//データ型
/*
-文字列
-数値型
-論理型
-配列
-オブジェクト
-null
*/

//$name
$msg = "Heloo\n";

echo $msg;

//中に入っているデータを知る
var_dump($msg);


//定数: 変更されない値につけるラベル

define("MY_EMAIL","efef1201@yaho\n");
echo MY_EMAIL;

//行数
/*
var_dump(__FILE__);
var_dump(__DIR__);

*/

/*
文字列
"" 特殊文字 変数
''  単語
*/

$name="yamada";

$a1="hello\n";
$a2="name\n";

echo $a1;
echo $a2;

$x="hello"."takeshi";
var_dump($x);

//swich文

$signal="green";

switch($signal){
    case "red":
        echo "stop!";
        break;
    case "blue":
    case "green":
        echo "go!";
        break;
        
    case "yellow":
        echo "causyion! ";
        break;
        
    default:
        echo "weong signal";
}