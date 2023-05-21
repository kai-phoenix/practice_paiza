<?php
    $in=str_replace(array("\r\n","\r","\n")," ",trim(fgets(STDIN)));
    list($n,$x,$p)=explode(" ",$in);
    $val=0;
    $a=array($x,$p);
    for($i=0;$i<$n;$i++)
    {
        $a[]=str_replace(array("\r\n","\r","\n")," ",trim(fgets(STDIN)));
    }
    sort($a);
    //var_dump($a);
    $count=0;
    foreach($a as $val)
    {
        $count++;
        if($val===$p)
        {
            echo $count;
            break;
        }
    }
?>