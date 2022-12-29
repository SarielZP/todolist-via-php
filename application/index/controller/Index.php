<?php
namespace app\index\controller;

use think\Controller;

use app\index\model\Contentlist;
use think\Request;
use think\Model;
use think\Db;

class Index extends Controller
{
    public function index()
    {
        $request = Request::instance();
        $sql = 'select *
        from contentlist;';
        $list = Contentlist::query($sql);
        $this->assign("list",$list);
        return $this->fetch();
    }
    public function Handleadd()
    {
        $request = Request::instance();
        $content = $request->param("newContent");
        console.log($content);
        $sql = "INSERT INTO `contentlist` ( `content`) VALUES ('"+$content+"');";
        $res=Contentlist::execute($sql);
        if($res){
            echo "sucess";
            } else{
            echo "数据插入出错";
        }
        $sql1 = 'select *
        from contentlist;';
        $list = Contentlist::query($sql1);
        $this->assign("list",$list);
        return $this->fetch();
    }
    public function Handlecleanse()
    {
        $request = Request::instance();
        $sql = "delete 
        from contentlist where 1=1;";
        $res=Contentlist::execute($sql);
        if($res){
            echo "sucess";
            } else{
            echo "数据插入出错";
        }
        $sql1 = 'select *
        from contentlist;';
        $list = Contentlist::query($sql1);
        $this->assign("list",$list);
        return $this->fetch();
    }
    public function Handledelitem()
    {
        $request = Request::instance();
        $id = $request->param("id");
        console.log($id);
        $sql = "delete 
        from contentlist where id="+$id+";";
        $res=Contentlist::execute($sql);
        if($res){
            echo "sucess";
            } else{
            echo "数据插入出错";
        }
        $sql1 = "select *
        from contentlist ;";
        $list = Contentlist::query($sql1);
        $this->assign("list",$list);
        return $this->fetch();
    }
}
