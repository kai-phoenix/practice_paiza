<?php
    $n=str_replace(array("\r\n","\r","\n"),"",trim(fgets(STDIN)));
    for($i=0;$i<$n;$i++)
    {
        $val=str_replace(array("\r\n","\r","\n"),"",trim(fgets(STDIN)));
        if($i===0)
        {
            
        }
        else
        {
            echo $val."\n";
        }
    }
?>