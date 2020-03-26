<?php

//while 迴圈

$str="today is a good day";
$find="s";

/*
for($i=0;$i<strlen($str);$i++){
    echo "印幾次";
    echo "<br>";
}
*/

$status=false;
$position=0;
while($status==false){
    $tmp=mb_substr($str,$position,1,"utf8");//利用函式mb_substr()來取得某個人位置的字元, 第三個參數是取幾個字出來(int $length)。

    if($tmp==$find){
        echo "字元".$find."在".$str."的第".$position."個位置";
        $status=true;
    }
    $position++;
}


echo "<br>"."p=".$position;

?>