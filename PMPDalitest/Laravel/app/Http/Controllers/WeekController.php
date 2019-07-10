<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request as request;
use Illuminate\Support\Facades\DB;
class WeekController extends Controller{

    public function quick($arr)
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
            if ($arr[$i]<$base)
            {
                $min[]=$arr[$i];
            }
            else
            {
                $max[]=$arr[$i];
            }
        }
        $left=$this->quick($min);
        $right=$this->quick($max);
        $data=array_merge($left,[$base],$right);
        return $data;
    }
    public function cs()
    {
        $arr=[3,1,10,5,2,7,6,4,9,8];
        $data=$this->quick($arr);
        var_dump($data);
    }
    public function yang($arr)
    {
        for ($i=0;$i<count($arr);$i++)
        {
            for ($j=0;$j<$i;$j++)
            {
                if ($arr[$i]==0 || $arr[$j]==0 )
                {
                    echo $arr[$i][$j]=1;
                }
                else
                {
                    echo $arr[$i-1][$j-1]+$arr[$i-1][$j];
                }

            }
            echo "";
        }
        echo "</br>";
        $res=$this->yang(9);
        var_dump($res);
    }
    public function index()
    {
        return view('Index.index');
    }
    public function add(request $request)
    {
        $title=$request->post('title');
        $content=$request->post('content');
        $author=$request->post('author');
        $count=$request->post('count');
        $res=DB::table('book')->insert(
            ['title'=>$title,
                'content'=>$content,
                'author'=>$author,
                'count'=>$count,
                ]
        );
        if ($res)
        {
            echo "添加成功";
        }
    }
    public function show()
    {
        $data=DB::table('book')->orderBy('count','desc')->get();
        return view('index.show',['res'=>$data]);
    }
    public function search(request $request)
    {
        $name=$request->get('name');
        $data=DB::table('book')->where("title like '$name'")->get();
        return view('index.show',['res'=>$data]);
    }
    public function sc(request $request)
    {
        $id=$request->get('id');
        $data=DB::table('book')->where("id",$id)->delete();
        if ($data)
        {
            e('删除成功');
        }
    }

}