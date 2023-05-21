<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_num =trim(fgets(STDIN));
    $input_word=fgets(STDIN);
    $data=explode(" ",$input_word);
    for($i=0;$i<=$input_num;$i++)
    {
        echo $data[$i]."\n";
    }
?>