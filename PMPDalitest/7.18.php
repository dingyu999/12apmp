<?php

    function fz($str)
    {
        $data=[];
      $new=explode(' ',$str);
      for ($i=count($new);$i>=0;$i--)
      {
          $data[]=$new[$i];
      }
       $xc=implode(' ',$data);
      return $xc;
    }
    $str="student a am I";
    $res=fz($str);
    echo $res;


    ?>