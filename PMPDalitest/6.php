<?php
    function yzone($n,$m)
    {
        $num=0;
        for ($i=$n;$i<=$m;$i++)
        {
            $new=$i;
            while ($new)
            {
                if ($new%10==1)
                {
                    $num++;
                }
                $new=$new/10;
            }
        }
        return $num;
    }
   echo yzone(1,13);



    ?>