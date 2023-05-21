<?php
    $in=str_replace(array("\r\n","\n","\r"),"",trim(fgets(STDIN)));
    list($n,$k)=explode(" ",$in);
    for($i=0;$i<$n;$i++)
    {
        $s[$i]=str_replace(array("\r\n","\n","\r"),"",trim(fgets(STDIN)));
    }
    for($i=0;$i<$k;$i++)
    {
        $history_list[$i]=str_replace(array("\r\n","\n","\r"),"",trim(fgets(STDIN)));
        $history_list[$i]=explode(" ",$history_list[$i]);
        list($y[$i],$c[$i])=$history_list[$i];
        //$history[]=['year'=>$y[$i],'student'=>$c[$i]];
    }
    
    // ksort($history);
    array_multisort($y,SORT_ASC,$history_list);
    //var_dump($history_list);
    //exit;
    foreach($history_list as $history)
    {
        echo $history[1]."\n";
    }
?>