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

    echo "<td>"g.$j."x".$i."=".($i*$j)."</td>";
    }
    echo "</tr>";
    echo "<br>";
    // echo "<hr>";
}
echo "</table>";
?>

