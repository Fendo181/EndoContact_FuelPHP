<?php
//クラスが持つ変数を"Property"
//クラスが持つ関数を"method"と呼ぶ


//クラスを元にデータを持たせたobjectをinstanceと呼ぶ
/*
new演算子でinstance化


$bob = new User("Bob") //Userがクラス名
//Propartyにアクセスする(->)。
$bob -> name; //name変数にアクセスする。
$bob -> sayHi(); //nameクラスのメソッドにアクセスする。

//コンストラクタ


*/
class User{
    //propaty
    public $name;
    
    //constracter
    
    pubic function __construct($name){
        //->を使う
        //this ->(アクセス) 変数(propaty)=$引数
        $this ->name =$name;
        
    }
    //method
    public function sayHI(){
        //constructの変数の初期設定呼び出しをそのまま使う
        echo "Hi , iam $this->name!";
        print "<br>";
    }
}

//instance作成
$tom =new User("TOm");
$bob =new User("BOB");

//propaty呼び台(アクセス)

echo $tom->name;
$bob->sayHI();

?>