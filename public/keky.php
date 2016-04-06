<?php

//配列
// key value


//最後の,はなくてもあっても大丈夫。

$sales=array(
    
"taguti" => 200,
"endo" => 700,
"terada " => 400,
    
);


//php 5.4以降の変更点
/*
$sales=[
"taguti" => 200,
"endo" => 700,
"terada" => 400
];
*/

var_dump($sales["taguti"]);
print "<br>";
$sales["endo"] = 900;
var_dump($sales["endo"]);
print "<br>";

$colos=array("red","blue","pink");

print $colos[1];
print "<br>";
var_dump($colos[2]);


//for文の強い味方
//配列内容を取り出すfor文


//$salse

foreach($sales as $key => $value ){
    print "<br>";
    echo "($key) $value";
}
    
//$colos
print "<br>";

/*
foreach($colos as $value){
    print "<br>";
    echo "$value";
}
*/


//foreach if while for コロン公文

foreach($colos as $value):
    print "<br>";
    echo "$value";
endforeach;


$test=array("math","english","art",);

?>


/*コメントアウト(仮)

//phpのversionが古いのか?


<ul>
<?php foreach($test as $ num ): ?>
    <li><?php echo "$num"; ?></li>
<?php endforeach; ?>
</ul>

*/



