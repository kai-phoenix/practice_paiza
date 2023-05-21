<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_num =fgets(STDIN);
    $roop_num=explode(" ",$input_num);
    $roop_row=$roop_num[0];
    for($i=0;$i<$roop_row;$i++)
    {
        $input_data[$i]=fgets(STDIN);
        echo $input_data[$i];
    }
?>