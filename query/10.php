<?php
    $in=str_replace(array("\r\n","\n","\r"),"",trim(fgets(STDIN)));
    list($n,$k)=explode(" ",$in);
    for($i=0;$i<$n;$i++)
    {
        $name[$i]=str_replace(array("\r\n","\n","\r"),"",trim(fgets(STDIN)));
    }
    for($i=0;$i<$k;$i++)
    {
        $s=str_replace(array("\r\n","\n","\r"),"",trim(fgets(STDIN)));
        $command=explode(" ",$s);
        if($command[0]==="join")
        {
            // array_push($name,$command[1]);
            $name[]=$command[1];
        }
        elseif($command[0]==="leave")
        {
            $remove_key=array_search($command[1],$name);
            unset($name[$remove_key]);
        }
        elseif($command[0]==="handshake")
        {
            sort($name);
            foreach($name as $val)
            {
                echo $val."\n";
            }
        }
        else
        {
            //
        }
    }
?>