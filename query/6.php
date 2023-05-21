<?php
    $in=str_replace(array("\r\n","\r","\n"),"",trim(fgets(STDIN)));
    list($n,$k)=explode(" ",$in);
    $a=array();
    for($i=0;$i<$n;$i++)
    {
        $student_list=str_replace(array("\r\n","\r","\n"),"",trim(fgets(STDIN)));
        list($num,$id)=explode(" ",$student_list);
        $a[$num]=$id;
    }
    for($i=0;$i<$k;$i++)
    {
        $q=str_replace(array("\r\n","\r","\n"),"",trim(fgets(STDIN)));
        echo $a[$q]."\n";
    }
?>