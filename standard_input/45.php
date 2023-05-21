<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_num = intval(fgets(STDIN));
    for($i=0;$i<$input_num;$i++)
    {
        $input_alldata[$i]=fgets(STDIN);
        $input_data[$i]=explode(" ",$input_alldata[$i]);
        $input_dataA[$i]=$input_data[$i][0];
        $input_dataB[$i]=$input_data[$i][1];
        echo $input_dataA[$i]." ".$input_dataB[$i];
    }
?>