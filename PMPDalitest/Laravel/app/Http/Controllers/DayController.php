<?php
    namespace App\Http\Controllers;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request as request;
    use Illuminate\Support\Facades\DB;
    class DayController extends Controller{

        public function hello()
        {
            $str = "Hello world. It's a beautiful day.";
//            print_r (explode(" ",$str));
            var_dump(explode(" ",$str));

        }
        public function shuixianhua($n)
        {
            if ($n>=100 && $n<=999) {
                $a = floor($n/100);
                $b = $n/10 % 10;
                $c = $n%10;
                $sum=$a*$a*$a+$b*$b*$b+$c*$c*$c;
                if ($sum== $n) {
                    return true;
                } else {
                    return false;
                }
            }
            else
            {
                return false;
            }
        }
        public function number()
        {
//            $res=$this->shuixianhua(154);
//            if ($res)
//            {
//                echo "是水仙花";
//            }
//            else
//            {
//                echo "不是水仙花";
//            }
            $a=[25,3,1,7,9,6,26,35,57,14,21,48,69,72];
           var_dump($this->kp($a));
        }
        public function px()
        {
            $a=[25,3,1,7,9,6,26,35,57,14,21,48,69,72];
            for ($i=0;$i<count($a);$i++)
            {
                for ($j=$i+1;$j<count($a);$j++)
                {
                    if ($a[$i]>$a[$j])
                    {
                        $num=$a[$i];
                        $a[$i]=$a[$j];
                        $a[$j]=$num;
                    }
                }
            }
            echo "<pre>";
            var_dump($a);

        }

        public function kp($arr)
        {
            if (count($arr)<=1)
            {
                return $arr;
            }
            $base=$arr[0];
            $min=[];
            $max=[];
            for ($i=1;$i<count($arr);$i++)
            {
                if ($arr[$i]>$base)
                {
                    $max[]=$arr[$i];
                }
                else
                {
                    $min[]=$arr[$i];
                }
            }
            $left=$this->kp($min);
            $right=$this->kp($max);
            return array_merge($left,[$base],$right);
        }
        public function calSteps($n)
        {
            if ($n==1) return 1;
            if ($n==2) return 2;
            return $this->calSteps($n-1)+$this->calSteps($n-2);
        }
        public function yz()
        {
            echo $this->calSteps(10);
        }
    }