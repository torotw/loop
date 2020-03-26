<style>
*{
    font-family: "Courier New";
}

</style>




<?php
//直角三角形

for($i=0;$i<25;$i++){

    echo "★";

}
echo "<hr>";
//直角三角形

 for($i=0 ; $i<5 ; $i++){   
      
    for($j=$i;$j>=0;$j--){
        echo "★";     
     }    
     echo "<br>";
    }

  //老師的做法
  echo "<hr>";
  for($i=0 ; $i<5 ; $i++){   
      
    for($j=0;$j<($i+1);$j++){ //$i要加以j才會小於
        echo "★";     
     }    
     echo "<br>";
    }
//倒直角三角形
echo "<hr>";
for($i=5 ; $i>0 ; $i--){   
      
    for($j=0;$j<$i;$j++){ //$i要加以j才會小於
        echo "★";     
     }    
     echo "<br>";
    }
//正三角形 老師解法
echo "<hr>";
for($i=0 ; $i<5 ; $i++){   
    
    for($k=0;$k<(4-$i);$k++){ 
        echo "&nbsp;"; //not break space
            
     }  
     for($j=0;$j<($i*2+1);$j++){ 
        echo "*"; 
            
     } 
     
     echo "<br>";
    }




?>