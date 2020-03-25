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
if ($year % 4 == 0 && ($year % 100 != 0 or $year % 400 == 0 ) && $year % 3200 != 0) {


  echo "閏年";



} else {
  echo "平年";
}
