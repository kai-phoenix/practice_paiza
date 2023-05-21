<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_num=explode(" ",fgets(STDIN));
    $input_count=intval($input_num[0]);
    for($i=1;$i<$input_count+1;$i++)
    {
        echo $input_num[$i]."\n";
    }
?>