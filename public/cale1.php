<?php
print "<h1>".date(F)."</h1>";
print "Today".date("Y/m/d/l");
print "<br>";
//$arrayweek=array("|Sun","Mon","The","wed","Thu","Fri","Sat");
$arrayweek=array("Sun","Mon","The","wed","Thu","Fri","Sat");

print "<table border=1><tr>";
foreach($arrayweek as $value){
        print "<th>".$value."</th>";

}
print "</tr><tr>";
for($i=0;$i<date("t");$i++){
    
    //曜日判定 0=日曜　
    $week_number=date("w",mktime(0,0,0, date("n"),$i+1,date("Y")));
    if($i==0){
        print "<tr>";
        //space_cell($week_number);
         Print_Calender::space_cell($week_number);
    }elseif($week_number =0){
        print "<tr>";
    }

     print "<td>".($i+1)."</td>";
    
    if($i+1==date("t")){
        //space_cell(6-$week_number);
        Print_Calender::space_cell(6-$week_number);
        print "</tr>";
    }elseif($week_number==6){
        print "</tr>";
    }
}                                                                 
print "</table>";
class Print_Calender{
function space_cell($count){
     if($count!=0){
         for($i=0; $i<$count; $i++){
             print "<td></td>";
         }
       }
     }
}

?>