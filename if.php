<?php
//if判斷式

$score = 50;





if ($score >= 90) {
  echo "A";
} else if ($score >= 75) {
  echo "B";
} else if ($score >= 60) {
  echo "C";
} else {
  echo "D";
}

//閏年判斷

echo "<hr>";
$year = 2000;
echo "西元年:" . $year;
echo "<br>";


//&&二者皆成立
if ($year % 4 == 0 && ($year % 100 != 0 or $year % 400 == 0)) {


  echo "閏年";
} else {
  echo "平年";
}

$level = "A";
echo "等級:" . $level;
echo "<br>";

switch ($level) {
  case "A":
    echo "非常好，請努力保持";
    break;
  case "B":
    echo "可圈可點，但還有進步的空間";
    break;
  case "C":
    echo "一般水平，需要更多的努力";
    break;
  case "D":
    echo "用心不足，請加強";
    break;

}


?>