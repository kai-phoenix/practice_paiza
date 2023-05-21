<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_line = fgets(STDIN);
    $input_line1=fgets(STDIN);
    $input_data=explode(" ",$input_line1);
    for($i=0;$i<$input_line;$i++)
    {
        echo $input_data[$i]."\n";
    }
?>