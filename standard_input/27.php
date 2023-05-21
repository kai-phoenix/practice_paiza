<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_count=intval(fgets(STDIN));
    $input_num=explode(" ",fgets(STDIN));
    for($i=0;$i<$input_count;$i++)
    {
        echo $input_num[$i]."\n";
    }
?>