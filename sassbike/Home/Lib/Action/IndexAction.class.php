<?php
header("content-type:text/html;charset=utf-8");
class IndexAction extends Action {
    public function index(){
		$m=M('News');
		import("ORG.Util.Page");	//导入分页类
		$count=$m->count();

		//实例化分页类，传入总记录数和每页显示的记录数
		$Page=new Page($count,3);	
		$page=$Page->show();	//分页显示输出

		// 进行分页数据的查询，注意limit()方法的参数要用Page类的属性
		$data=$m->order('newsid')->limit($Page->firstRow .','.$Page->listRows)->select();  
		$this->assign('newslist',$data); //赋值数据集
		$this->assign('page',$page);	//赋值分页输出
		
		//ajax返回信息
        // $res["content"] = $this->fetch('index');
        // $this->ajaxReturn($res);

		$this->display();			//输出模板

    }
}


