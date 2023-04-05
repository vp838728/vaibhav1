<?php
$num1=300;
$num2=600;
$num3=800;
if($num1>$num2 && $num1>$num3)
{
    echo"the largest number of=".$num1."";
}
else{
    if($num2>$num1 && $num2>$num3)
    {
     echo"the largest number of=".$num2."";
    }
    else
    {
      echo "the largest number of=".$num3."";
    }

}
