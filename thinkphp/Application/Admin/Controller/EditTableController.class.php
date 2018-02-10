<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Model;
class EditTableController extends Controller{
	public function index(){
		check_admin();
		$table=I('get.table');
		//echo $table;
		$this->assign('table_name',$table);
		$t=M($table);
		$dbFields=$t->getDbFields();
		$this->assign('dbFields',$dbFields);
		$data=$t->select();
		$this->assign('data',$data);
		$this->display();
	}
	function edit(){
		$id=I('get.id');
		$table=I('get.table');
		$t=M($table);
		$wh['id']=$id;
		$data=$t->where($wh)->select();
		if(count($data)==0){
			$this->error('数据已删除',U('index'));
		}
		$this->assign('data',$data);
		$dbFields=$t->getDbFields();
		$this->assign('dbFields',$dbFields);
		$this->assign('table',$table);
		$this->assign('id',$id);
		$this->display();
	}
	function update(){
		$id=I('get.id');
		$table=I('get.table');
		//echo $id.$table;
		$data=I('post.');
		if($data['updated_at']!=null){
			$data['updated_at']= date('y-m-d h:i:s',time());
		}
		$wh['id']=$id;
        $t=M($table);
        if($t->where($wh)->save($data)){
            $this->success('更新成功',U('index?table='.$table));
        }else{
            $this->error('更新失败');
        }
	}
	function delete(){
		$id=I('post.id');
		$table=I('post.table');
		$t=M($table);
		if($t->where(array('id'=>$id))->delete()){
			$this->ajaxReturn($id);
		}else{
			$this->ajaxReturn(-1);
		}		
		
	}
	function add(){
		$table=I('get.table');
		$t=M($table);
		$this->assign('table',$table);
		$dbFields=$t->getDbFields();
		$this->assign('dbFields',$dbFields);
		$this->display();
	}
	function addrow(){
		$table=I('get.table');
		$p=I('post.');
		$data;
		foreach ($p as $key => $value) {
				if($value!=null&&$value!=''){
					$data[$key]=$value;
				}
			}	
        $t=M($table);
        if($t->add($data)){
            $this->success('更新成功',U('index?table='.$table));
        }else{
            $this->error('更新失败');
        }
	}
}