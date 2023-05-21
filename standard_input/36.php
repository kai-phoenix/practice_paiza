<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_line = fgets(STDIN);
    $input_data=explode(" ",$input_line);
    $input_num=intval($input_data[0]);
    for($i=1;$i<=$input_num;$i++)
    {
        echo $input_data[$i]."\n";
    }
?>