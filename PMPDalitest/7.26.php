<?php
    function two($n)
    {
        $new=decbin($n);
        $data=substr_count($new,'1');
        return $data;
    }
    $n=10;
    echo two($n);