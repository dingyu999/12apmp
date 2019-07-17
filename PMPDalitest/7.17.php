<?php
    function aa($arr)
    {
       $data=[];
        for ($i=0;$i<count($arr);$i++)
        {
            if ($arr[$i]!=2&&$arr[$i]!=3&&$arr[$i]!=5)
            {
                $data[]=$arr[$i];
            }
        }
       return $data;
    }
    $arr=[2,4,3,6,3,2,5,5];
   $res=aa($arr);
   var_dump($res);


    ?>