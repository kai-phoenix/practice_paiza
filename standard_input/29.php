<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_count=intval(fgets(STDIN));
    for($i=0;$i<$input_count;$i++)
    {
        $input_num[$i]=fgets(STDIN);
        echo $input_num[$i];
    }
?>