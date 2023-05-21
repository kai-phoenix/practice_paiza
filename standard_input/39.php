<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_num = intval(fgets(STDIN));
    for($i=0;$i<$input_num;$i++)
    {
        $input_data[$i]=fgets(STDIN);
        echo $input_data[$i];
    }
?>