<?php
function vaibhav($value,$key)
{
    echo "$key: $value"."\n";
    $a='{"name": "vaibhav",
        "book name":"php",
        "details":
        {
            "publisher":"litle brown"
        }
    }';
    $j1=json_decode($a,true);
    array_walk_recursive($j1,"vaibhav");
}
?>