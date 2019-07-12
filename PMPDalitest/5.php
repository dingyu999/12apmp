<?php
    function pd($arr)
    {
        $ji=[];
        $ou=[];
        for ($i=0;$i<count($arr);$i++)
        {
            if ($arr[$i]/2==0)
            {
               $ji[]=$arr[$i];
            }
            else{
                $ou[]=$arr[$i];
            }
        }
       $qa= array_merge($ji,$ou);
        echo $qa;
    }
    function cd()
    {
        $arr=[1,2,3,4,5,6];
        pd($arr);
    }




    ?>