<?php
   

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
    
    public function getMessage(){
        echo "hello form User class!";
        print "<br>";
    }
}


?>