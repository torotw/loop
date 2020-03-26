<?php
//for loop
//for($i=0;$i<10;$i++) => ++$i

for($i=0; $i<10;$i=$i+1){
echo "hello" . $i . "<br>";
 
}
echo "<hr>";
//99乘法表
echo "<table border=1>";
for($i=1;$i<=9;$i=$i+1){
    echo "<tr>";
    for($j=1;$j<=9;$j++){

    echo "<td>&nbsp".$j."x".$i."=".($i*$j)."&nbsp</td>";
    }
    echo "</tr>";
    echo "<br>";
    // echo "<hr>";
}
echo "</table>";


echo "<hr>";
//99乘法表形式2
echo "<table border=1>";


for($i=0;$i<=10;$i=$i+1){
    echo "<tr>";
    if($i==0){
        echo "<td>&nbsp"."</td>";  
}else {
    for($j=1;$j<=9;$j++){
   
        echo "<td>&nbsp".($i*$j)."&nbsp</td>";
}  
for($j=1;$j<=9;$j++){
   
    echo "<td>&nbsp".($i*$j)."&nbsp</td>";   
}
echo "</tr>";
    echo "<br>";
    // echo "<hr>";
}
}  

echo "</table>";



echo "<hr>";

//99乘法表形式2
echo "<table border=1>";


for($i=0;$i<10;$i=$i+1){
    
    if($i==0){
  echo "<tr>";
        echo "<td>&nbsp"."</td>";  
    for($j=1;$j<=9;$j++){
   echo "<td>&nbsp".$j."&nbsp</td>";
    }
}elseif($i>0){
    echo "<td>".$i."</td>";
    for($j=1;$j<=9;$j++){
        echo "<td>&nbsp".($i*$j)."&nbsp</td>";
         }  
}  

echo "</tr>";
    echo "<br>";
    // echo "<hr>";
}
  

echo "</table>";

echo "<hr>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";



?>
