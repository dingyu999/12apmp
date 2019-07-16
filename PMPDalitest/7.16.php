<?php
    function px($arr)
    {
        $data=[];
        for ($i=0;$i<3;$i++)
        {
            for ($j=0;$j<3;$j++)
            {
                for ($k=0;$k<3;$k++)
                {
                    if ($arr[$i]!=$arr[$j]&&$arr[$i]!=$arr[$k]&&$arr[$j]!=$arr[$k])
                    {
                        $data[]=$arr[$i].$arr[$j].$arr[$k];
                    }
                }
            }
        }
        sort($data);
        return $data[0];
    }
    $arr=[3,32,321];
    $res=px($arr);
    echo $res;


    ?>