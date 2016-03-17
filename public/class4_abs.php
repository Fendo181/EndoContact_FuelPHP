<?php

//抽象クラス
//
abstract class BaseUser{
    
    public $name;
    
    //一部のメソッドを抽象クラスにして必ず実装するプロパティ
    abstract public function sayHi();

}

class User extends BaseUser{
    
    //必ず実装しないといけない
    //全て統一
    public function sayHi(){
        echo "hello from User";
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




?>