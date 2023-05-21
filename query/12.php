<?php
    $in=str_replace(array("\r\n","\n","\r"),"",trim(fgets(STDIN)));
    list($n,$k)=explode(" ",$in);
    for($i=0;$i<$n;$i++)
    {
        $regist_list=str_replace(array("\r\n","\n","\r"),"",trim(fgets(STDIN)));
        list($c,$p,$d)=explode(" ",$regist_list);
        // 会社名をキー、パスワード、預金額を格納する連想配列bankを作成
        $bank[$c]=['password'=>$p,'deposit'=>$d];
    }
    for($i=0;$i<$k;$i++)
    {
        $deal_list=str_replace(array("\r\n","\n","\r"),"",trim(fgets(STDIN)));
        list($g,$m,$w)=explode(" ",$deal_list);
        // passwordを名前キーで比較する
        $compare=$bank[$g]['password'];
        if($compare===$m)
        {
            $bank[$g]['deposit']-=$w;
        }
    }
    $company=array_keys($bank);
    for($i=0;$i<$n;$i++)
    {
        echo $company[$i]." ".$bank[$company[$i]]['deposit']."\n";
    }
?>