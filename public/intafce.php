<?php


//interface
//メソッドのアクセス件は全てpublic1となる。

interface sayHI{
    public function sayHi();
}

interface sayHello{
    public function sayHello();
}


//抽象クラスは1つしか継承できない。
//interfaceは複数のinterfaceを継承できる.

//implementsは複数のインターフェースを実装できる。
class User implements sayHi,sayHello{
    
    public function sayHi(){
        echo "hi!";
    }
    
    public function sayHello(){
        echo "hello";
            
    }
    
}




?>