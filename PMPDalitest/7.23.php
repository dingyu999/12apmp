<?php
    function FirstNotRepeatingChar($str)
    {
        $arr=str_split($str);
        foreach ($arr as $k=>$v)
        {
            if (substr_count($str,$v)==1)
            {
                return $k;
            }
        }
    }
    $str='aaabbbbccdddddeffffff';
   echo FirstNotRepeatingChar($str);



    ?>