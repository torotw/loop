<style>
    * {
        font-family: "Courier New";
    }
</style>




<?php
//直角三角形

for ($i = 0; $i < 25; $i++) {

    echo "★";
}
echo "<hr>";
//直角三角形

for ($i = 0; $i < 5; $i++) {

    for ($j = $i; $j >= 0; $j--) {
        echo "★";
    }
    echo "<br>";
}

//老師的做法
echo "<hr>";
for ($i = 0; $i < 5; $i++) {

    for ($j = 0; $j < ($i + 1); $j++) { //$i要加以j才會小於
        echo "★";
    }
    echo "<br>";
}
//倒直角三角形
echo "<hr>";
for ($i = 5; $i > 0; $i--) {

    for ($j = 0; $j < $i; $j++) { //$i要加以j才會小於
        echo "★";
    }
    echo "<br>";
}
//正三角形 老師解法
echo "<hr>";
for ($i = 0; $i < 5; $i++) {

    for ($k = 0; $k < (4 - $i); $k++) {
        echo "&nbsp;"; //not break space

    }
    for ($j = 0; $j < ($i * 2 + 1); $j++) {
        echo "*";
    }

    echo "<br>";
}


// &nbsp;&nbsp;&nbsp;&nbsp;*<BR>;
// &nbsp;&nbsp;&nbsp;***<BR>;
// &nbsp;&nbsp;*****<BR>;
// &nbsp;*******<BR>;
// *********<BR>;

//菱形 老師解法
echo "<hr>";
for ($i = 0; $i < 5; $i++) {

    for ($k = 0; $k < (4 - $i); $k++) {
        echo "&nbsp;"; //not break space

    }
    for ($j = 0; $j < ($i * 2 + 1); $j++) {
        echo "*";
    }

    echo "<br>";
}
for ($i = 3; $i >= 0; $i--) {

    for ($k = 0; $k < (4 - $i); $k++) {
        echo "&nbsp;"; //not break space

    }
    for ($j = 0; $j < ($i * 2 + 1); $j++) {
        echo "*";
    }

    echo "<br>";
}

//解法2
echo "<hr>";
$t = 0;
for ($i = 0; $i < 9; $i++) {

    

    for ($k = 0; $k < (4 - $t); $k++) {
        echo "&nbsp;"; //not break space

    }
    for ($j = 0; $j < ($t * 2 + 1); $j++) {
        echo "*";
    }
    if ($i<4) {
        $t++;
    } else {
        $t--;
    }
    echo "<br>";
}




?>