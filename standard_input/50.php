<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_num =fgets(STDIN);
    $roop_num=explode(" ",$input_num);
    $roop_row=$roop_num[0];
    for($i=0;$i<$roop_row;$i++)
    {
        $input_data[$i]=fgets(STDIN);
        $output_data[$i]=explode(" ",$input_data[$i]);
        $output_num=count($output_data[$i]);
        for($j=1;$j<$output_num; $j++)
        {
            if(1<$j)
            {
                echo " ".$output_data[$i][$j];
            }
            else
            {
                echo $output_data[$i][$j];
            }
        }
    }
?>