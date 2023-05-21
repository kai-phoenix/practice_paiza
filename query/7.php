<?php
    $in=str_replace(array("\r\n","\r","\n")," ",trim(fgets(STDIN)));
    list($n,$k)=explode(" ",$in);
    for($i=0;$i<$n;$i++)
    {
        $student_list=str_replace(array("\r\n","\r","\n")," ",trim(fgets(STDIN)));
        list($num,$id)=explode(" ",$student_list);
        $student_info[$num]=$id;
    }
    for($j=0;$j<$k;$j++)
    {
        $S=str_replace(array("\r\n","\r","\n")," ",trim(fgets(STDIN)));
        $command_list=explode(" ",$S);
        if($command_list[0]==="join")
        {
            $student_info[$command_list[1]]=$command_list[2];
        }
        elseif($command_list[0]==="leave")
        {
            unset($student_info[$command_list[1]]);
        }
        elseif($command_list[0]==="call")
        {
            echo $student_info[$command_list[1]]."\n";
        }
    }
?>