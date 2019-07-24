<?php
    function day16($target,$array)
    {
        foreach ($array as $k=>$v) {
            if (in_array($target, $v)) {
                return "true";
            } else {
                return "false";
            }
        }
    }
    $target=1;
    $array=array([1,2,8,9],[2,4,9,12],[4,7,10,13],[6,8,11,15]);
    echo day16($target,$array);