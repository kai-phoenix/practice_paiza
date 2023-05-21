<?php
    $in=str_replace(array("\r\n","\r","\n")," ",trim(fgets(STDIN)));
    list($n,$k,$p)=explode(" ",$in);
    $count=0;
    for($i=0;$i<$n;$i++)
    {
        $a=str_replace(array("\r\n","\r","\n")," ",trim(fgets(STDIN)));
        // 値が下回る回数を数える
        if($a<$p)
        {
            $count++;
        }
    }
    for($i=0;$i<$k;$i++)
    {
        $event=str_replace(array("\r\n","\r","\n")," ",trim(fgets(STDIN)));
        $event_list=explode(" ",$event);
        //var_dump($event_list[1]);
        if($event_list[0]==="join")
        {
            //array_unshift($a,$event_list[1]);
            if($event_list[1]<$p)
            {
                $count++;
            }
        }
        elseif($event_list[0]==="sorting")
        {
            echo ($count+1)."\n";
            // sort($a);
        }
    }
?>