<?php

//User
class User{
    //propaty
    public $name;
    
    //constracter
    
    public function __construct($name){
        //->を使う
        //this ->(アクセス) 変数(propaty)=$引数
        $this ->name =$name;
        
    }
    
        
    //method
    public function sayHI(){
        //constructの変数の初期設定呼び出しをそのまま使う
        echo "Hi ,iam $this->name!";
        print "<br>";
    }
    
    public static  function getMessage(){
        echo "hello form User class!";
    }
}


//クラス継承
class AdminUser extends User{
    
    
    //小クラスでOverwrite
    
      public function sayHI(){
        //constructの変数の初期設定呼び出しをそのまま使う
        echo "[admmin]Hi ,iam $this->name!";
        print "<br>";
    }
    

    public function sayHello(){
        echo "hello from Admin!";
        print "<br>";
    }
    
    
}

//instance作成
$tom =new User("TOM");
$bob =new User("BOB");
$steve =new AdminUser("Steave");

//プロパティアクセス
echo $steve->name;
print "<br>";
echo $tom->name;
//methodアクセス
print "<br>";
$tom->sayHI();
$bob->sayHI();
$bob->sayHi();
//子クラスでmethod呼び出し
//$steve->sayHello();//小クラスメソッド呼び出し
$steve->sayHI();//小クラスメソッドが親クラスのメッソドを@over rideしている。

//static メソッドアクセス

User::getMessage();


?>