<?php
print("土日でPHPがわかるわけねぇだろう！");
print "<br>"; //コメントアウト
print "<br>"; //これは改行
print("でもPHP楽しい!!!!");
print("<br>");
$p="PHP";
print "土日で".$p."理解できない";
print "<br>";
print "そんなプログラミングチュートリアル";
print "<br>";
$str="曜日でわかるPHPプログラミング教室";
$array_week=array("Sun"=>"日","Mon"=>"月","The"=>"火","Wed"=>"水","Thu"=>"木","Fri"=>"金","Sat"=>"土");
print "<br>";
print "foreach文で表示";
print "<br>";
//valueの中身がなくなるまで、繰り返す
foreach($array_week as $value){
    print $value.$str;
    print "<br>";
    
}
print "<br>";
print "for文と数字Arrayで表示";
print "<br>";
$array_week=array("日","月","火","水","木","金","土");
for($i=3; $i>=0; $i--){
    print $array_week [$i].$str;
    print "<br>";
}

print "<br>";
print "if文とで表示";
print "<br>";

$donichi="";

for($i=6;$i>=0;$i--){
    if($array_week[$i]=="土" || $array_week[$i]=="日"){
        $donichi=$donichi.$array_week[$i];
    }else{
        print $array_week[$i].$str;
        print "<br>";
    }
}

print $donichi."でわかるPHPプログラミング教室";

/*
    //数字でfor

print $array_week ["Sun"].$str;
print "<br>";
print $array_week ["Mon"].$str;
print "<br>";
print $array_week ["The"].$str;
print "<br>";
print $array_week ["Wed"].$str;
print "<br>";
print $array_week ["Thu"].$str;
print "<br>";
print $array_week ["Fri"].$str;
print "<br>";
print $array_week ["Sat"].$str;
print "<br>";

print "<br>";
$str="曜日でわかるPHPプログラミング教室";
$array_week=array("日","月","火","水","木","金","土");
print $array_week [0].$str;
print "<br>";
print $array_week [1].$str;
print "<br>";
print $array_week [2].$str;
print "<br>";
print $array_week [3].$str;
print "<br>";
print $array_week [4].$str;
print "<br>";
print $array_week [5].$str;
print "<br>";
print $array_week [6].$str;
print "<br>";
*/

?>