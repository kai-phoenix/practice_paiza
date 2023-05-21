<?php
    $in=str_replace(array("\r\n","\r","\n"),"",trim(fgets(STDIN)));
    list($n,$k)=explode(" ",$in);
    for($i=0;$i<$n;$i++)
    {
        $a[$i]=str_replace(array("\r\n","\r","\n"),"",trim(fgets(STDIN)));
    }
    for($i=0;$i<$k;$i++)
    {
        $s=str_replace(array("\r\n","\r","\n"),"",trim(fgets(STDIN)));
        if($s==="pop")
        {
            array_shift($a);
        }
        elseif($s==="show")
        {
            foreach($a as $val)
            {
                echo $val."\n";
            }
        }
    }
?>