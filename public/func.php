<?php

//関数

$lang ="ruby";//グローバル変数 どこでも使える!!!

function sayHI($name="taguti"){
    
    //ローカル変数
    
    $lang="php";//ローカル変数 //関数内だけ!!!
    
    
    echo "Hi!". $name."Fuck!".$lang;
    
    //return "Hi". $name."Fuck!";
    print "<br>";
}

sayHI();
var_dump($lang);
print "<br>";

//組み込み関数


$x=5.6;
//数字

echo ceil($x);//切り上
print "<br>";
echo floor($x);//切り捨て
print "<br>";
echo round($x);//四捨五入
print "<br>";

$a="hello";
echo strlen($a); //文字数表示1から始まる

//配列組み込み関数

count; //要素数
implode; //文字列連結



//関数呼び出し
/*
sayHI("Tom");
sayHI("Endo");
sayHI();

*/

//引数呼び出し
/*
$a=sayHI();
var_dump($a);
*/
?>