<?php
    $in=str_replace(array("\r\n","\r","\n"),"",trim(fgets(STDIN)));
    list($n,$k)=explode(" ",$in);
    for($i=0;$i<$n;$i++)
    {
        $a[$i]=str_replace(array("\r\n","\r","\n"),"",trim(fgets(STDIN)));
    }
    if(!empty(in_array($k,$a)))
    {
        echo "YES";
    }
    else
    {
        echo "NO";
    }
?>