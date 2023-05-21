<?php
    $in=str_replace(array("\r\n","\r","\n"),"",trim(fgets(STDIN)));
    list($n,$q)=explode(" ",$in);
    for($i=0;$i<$n;$i++)
    {
        // $a[$i]=str_replace(array("\r\n","\r","\n"),"",trim(fgets(STDIN)));
        $val=str_replace(array("\r\n","\r","\n"),"",trim(fgets(STDIN)));
        $a[$val]=$val;
    }
    for($i=0;$i<$q;$i++)
    {
        $k=str_replace(array("\r\n","\r","\n"),"",trim(fgets(STDIN)));
        if(!empty($a[$k]))
        {
            echo "YES\n";
        }
        else
        {
            echo "NO\n";
        }
    }
?>