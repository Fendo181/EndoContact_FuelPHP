<?php

//<ファイル分割技術>

//外部からclass 読み込み

//require  //fatal erro

//require_once 


//include "User.class.php";

//include //include waring
//include_once

//クアスのみ
//クラスが未定義の場合読み込まれる
//autoload

spl_autoload_register(function($class){
    require $class.".class.php";
});

$bob=new User("Bob");

//プロパティアクセス
echo $bob->name;
print "<br>";

//methodアクセス
print "<br>";
$bob->sayHI();
$bob->getMessage();


?>