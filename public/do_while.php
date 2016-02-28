<?php


/*ループ処理

while 

do while

*/


$i=1;//初期化

while($i < 10){
    echo $i;
    print "<br>";
    $i++;
}


 print "<br>";


//do while

$e=10;

do{
    echo $e;
    print "<br>";
    $e++;
}while($e < 20);


//for文でループ処理を行う
//break ループをン抜ける処理となる
//continue: それ以降の処理を実行せずに次のループに移る
print "<br>";


//最後に;が要らない
for($i = 0; $i <10; $i++){
    if($i ==5){
        continue;
    }
    echo $i;
    print "<br>";
}


?>