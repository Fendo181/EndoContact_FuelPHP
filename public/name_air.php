<?php


namespace Dotinstall\Lib;

class User{
    //propaty
    public $name;
    
    //static propaty
    
    public static $count=0;
    //constracter
    
    public function __construct($name){
        //->を使う
        //this ->(アクセス) 変数(propaty)=$引数
        $this ->name =$name;
        
        //static propaty
        self::$count++;
        
    }
    
        
    //method
    public function sayHI(){
        //constructの変数の初期設定呼び出しをそのまま使う
        echo "Hi ,iam $this->name!";
        print "<br>";
    }
    
    //static メソッド
    public function getMessage(){
        echo "hello form User class!";
    }
}


?>