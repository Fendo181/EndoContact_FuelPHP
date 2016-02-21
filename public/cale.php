<?php
print "<h1>".date(F)."</h1>";
print "Today".date("Y/m/d/l");
print "<br>";
//$arrayweek=array("|Sun","Mon","The","wed","Thu","Fri","Sat");
$arrayweek=array("Sun","Mon","The","wed","Thu","Fri","Sat");
//$p=" | ";
print "<table border=1><tr>";
foreach($arrayweek as $value){
    //print $value.$p;
    print "<th>".$value."</th>";
    //print $value;
}
print "</tr><tr>";
//print "</tr></table>";
//print "<br>";
for($i=0;$i<date("t");$i++){
    
    $week_number=date("w",mktime(0,0,0, date("n"),$i+1,date("Y")));
    if($week_number==0&&$i!=0){
        print "</tr>";
    }
    
    //print $p.($i+1);
     print "<td>".($i+1)."</td>";
    if($week_number==6 || $i==date("t")){
    //print"<br>";
        print "</tr>";
    }
}

print "</table>"
?>