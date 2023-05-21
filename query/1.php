<?php
    $in=str_replace(array("\r\n","\r","\n"),"",trim(fgets(STDIN)));
    list($n,$k,$q)=explode(" ",$in);
    for($i=0;$i<$n;$i++)
    {
        $a[$i]=str_replace(array("\r\n","\r","\n"),"",trim(fgets(STDIN)));
    }
    array_splice($a,$k,0,$q);
    foreach($a as $val)
    {
        echo $val."\n";
    }
?>