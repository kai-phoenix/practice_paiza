<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $word=array();
    $input_word = trim("one two three four five");
    $word=explode(" ",$input_word);
    $word_num=count($word);
    for($i=0;$i<$word_num;$i++)
    {
        echo $word["$i"]."\n";
    }
?>