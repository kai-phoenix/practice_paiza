<?php
    $input_line = fgets(STDIN);
    $word=explode(" ",$input_line);
    $word_num=count($word);
    for($i=0;$i<$word_num;$i++)
    {
        echo $word[$i]."\n";
    }
?>