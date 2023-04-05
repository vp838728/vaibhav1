<?php
$n=5;
$m=5;
for ($i=1;$i<=$n;$i++){
    for($j=1;$j<$m;$j++){
        if($i==1 || $j==1 || $i=$n || $j==$m ){
            echo "*";
        }
        {
            echo"";
        }
        else{
            echo"</br>";
        }
    }
}