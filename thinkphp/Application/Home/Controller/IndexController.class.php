<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class IndexController extends Controller {
    public function index(){
    	//echo "index";
        $this->assign('editTableAction',U('editTable'));
        //echo U('editTable');
    	$user=new Model('Student'); 
    	$data=$user->select(); 
        $dbFields=$user->getDbFields();
        //echo $dbFields[1];
        $this->assign('dbFields',$dbFields);
    	//var_dump($data); 
    	$this->assign('data',$data); 
    
    	//$name='hello world';
    	//$this->assign('name',$name);
    	//$this->display('updateTable');
    	$this->display();
    	//var_dump($this->fetch());
    	

    }
    public function editTable(){
    	//echo T();//输出模板地址
        $id=I('post.id');
        $action=I('post.action');
        $data['name']=I('post.name');
        $data['picture']=I('post.picture');
        $data['updated_at']=date("Y-m-d H:i:s");

        $user=M('Student');
        $toast="失败";
        if($action=='edit')
        {
            $flag=$user->where('id='.$id)->save($data);
            if($flag)
            {
                 $toast="修改成功";
             }else{
                 $toast='修改失败';
             }
        }else if($action=='add')
        {
            $data['created_at']=$data['updated_at'];
            $flag=$user->add($data);
            $toast=$flag?'添加成功':'添加失败';
        }else if($action=='delete')
        {
            $flag=$user->where('id='.$id)->delete();
            $toast=$flag?'删除成功':'删除失败';
        }
       echo $toast;
    }
  
}