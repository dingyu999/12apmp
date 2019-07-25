<?php
    function kp($arr)
    {
        if (count($arr)<=1)
        {
            return $arr;
        }
        $middle=$arr[0];
        $left=[];
        $right=[];
        for ($i=0;$i<count($arr);$i++)
        {
            if ($arr[$i]<$middle)
            {
                $left[]=$arr[$i];
            }
            if ($arr[$i]>$middle){
                $right[]=$arr[$i];
            }
        }
        $left=kp($left);
        $right=kp($right);
      return  $data= array_merge($left,[$middle],$right);
    }
    $arr_A=[1,3,6,9];
    $arr_B=[2,4,5,8,20];
    $new=array_merge($arr_A,$arr_B);
    var_dump(kp($new));




