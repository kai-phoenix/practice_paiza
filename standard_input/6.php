<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    //文字の抜き出し
    $input_line="Hello paiza";
    $word1=mb_strstr("$input_line"," ",true);
    $word2=mb_strstr("$input_line","p",false);
    echo $word1."\n";
    echo $word2;
?>