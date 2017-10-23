<?php
header("content-type:text/html;charset=utf-8");
class BikeAction extends Action {
    public function borrowBike(){
          if(!$_SESSION['nickName']){
               $this->redirect('__APP__/Index/index');
          }
          else{
               import("ORG.Util.Page"); //导入分页类

               $Model = D("Offer_recordView");
               $where1['Offer_record.offerState']=0;
               $where1['Offer_record.userId']=array('neq',$_SESSION['userId']);

               $count=$Model->where($where1)->count();

                //实例化分页类,传入总记录数和每页显示的记录数
               $Page=new Page($count,12);     
               $page=$Page->show();     //分页显示输出

               $bikeInfos=$Model->field('offerId,bikeId,userId,nickName,brand,bikeKinds,sexKinds,price,phone,location,offerTime,offerState,bikeImg,bikeExtension')->where($where1)->limit($Page->firstRow .','.$Page->listRows)->select();

               for($i=0;$i<$count;$i++){
                    if($bikeInfos[$i]['sexKinds']=='m'){
                         $bikeInfos[$i]['sexKinds']='男式';
                    }
                    elseif($bikeInfos[$i]['sexKinds']=='f'){
                         $bikeInfos[$i]['sexKinds']='女式';
                    }

                    if($bikeInfos[$i]['bikeKinds']=='bike'){
                         $bikeInfos[$i]['bikeKinds']='自行车';
                    }
                    elseif($bikeInfos[$i]['bikeKinds']=='elect'){
                         $bikeInfos[$i]['bikeKinds']='电动车';
                    }
               }
               
               // var_dump($bikeInfos);
               $this->assign('bikeInfo',$bikeInfos);    
               $this->assign('page',$page);  //赋值分页输出
               $this->display();             //输出模板
          }    
		
    }

    public function moreBikeInfo(){
          if(!$_SESSION['nickName']){
               $this->redirect('__APP__/Index/index');
          }
          else{
               //头像
               $m=M('User');
               $where['username']=$_SESSION['username'];
               $userPhoto=$m->where($where)->getField('headPhoto',1);
               $userExt=$m->where($where)->getField('extension',1);
               $this->assign('userPhoto',$userPhoto);
               $this->assign('userExt',$userExt);

               //车辆信息
               $offerId=$_GET['offerId']; 
               $offer=M('Offer_record');
               $offerInfo=$offer->where('offerId='.$offerId)->find();

               $bikeId=$offerInfo['bikeId'];
               $offerTime=$offerInfo['offerTime'];

               $bikelist=M(Bikelist);
               $where1['bikeId']=$bikeId;
               $data=$bikelist->where($where1)->select();
               $data[0]['offerTime']=$offerTime;
               $data[0]['offerId']=$offerId;
               if($data[0]['bikeKinds']=='bike'){
                    $data[0]['bikeKinds']=0; //自行车
               }
               elseif ($data[0]['bikeKinds']=='elect') {
                    $data[0]['bikeKinds']=1; //电动车
               }

               if($data[0]['sexKinds']=='m'){
                    $data[0]['sexKinds']=0;       //男
               }
               elseif ($data[0]['sexKinds']=='f') {
                    $data[0]['sexKinds']=1;       //女
               }
             
               $userWhere['userId']=$data[0]['userId'];
               $nickName=$m->where($userWhere)->getField('nickName',1);
               $data[0]['nickName']=$nickName;
                 
               // var_dump($data);
               $this->assign('bikeInfo',$data);
               $this->display();

          }
    }

    public function do_borrowBike(){
          if(!$_SESSION['nickName']){
               $this->redirect('__APP__/Index/index');
          }
          else{
               $offerId=$_GET['offerId'];
               //修改供车记录表里的offerState为1
               $offer=M('Offer_record');
               $where['offerId']=$offerId;
               $bikeInfo=$offer->where($where)->find();

               //向借车记录表里插入一条记录
               $borrowRecord['bikeId']=$bikeInfo['bikeId'];
               $borrowRecord['userId']=$bikeInfo['userId'];
               $borrowRecord['borrowerId']=$_SESSION['userId'];
               $borrowRecord['offerId']=$bikeInfo['offerId'];
               $borrowRecord['borrowTime']=date('Y-m-d H-i-s');
               $borrowRecord['borrowState']=0;    //未还

               $borrow=M('Borrow_record');
               $borrow->add($borrowRecord);

               $bikeInfo['offerState']=1;    //已借,向供车表保存车辆状态
               $bikeInfo['borrowerId']=$_SESSION['userId'];
               $bikeInfo['borrowId']=$borrow->max('borrowId'); 
               $i=$offer->where($where)->save($bikeInfo); 
               
               $url=__URL__.'/borrowBike';
               $data['newUrl'] = $url;
               if($i){
                    $this->ajaxReturn($data,"借车成功！",1);
               }
               else{
                    $this->ajaxReturn(0,"借车失败！",0);
               }
               
          }
    }

     public function offerBike(){
          if(!$_SESSION['nickName']){
               $this->redirect('__APP__/Index/index');
          }
          else{
              //头像
               $m=M('User');
               $where['username']=$_SESSION['username'];
               $userPhoto=$m->where($where)->getField('headPhoto',1);
               $userExt=$m->where($where)->getField('extension',1);
               $this->assign('userPhoto',$userPhoto);
               $this->assign('userExt',$userExt);
               $this->display();             //输出模板
          }
          // var_dump($userInfo);
     }

     public function do_offerBike(){	//供车处理
          if(!$_SESSION['nickName']){
               $this->redirect('__APP__/Index/index');
          }
          else{
          	$bikeData['userId']=$_SESSION['userId'];
          	$bikeData['brand']=$_POST['bikeBrand'];
               $bikeData['phone']=$_POST['phone'];
               $bikeData['price']=$_POST['price'];
               $bikeData['location']=$_POST['location'];
          	$bikeData['howOld']=$_POST['howOld'];
          	$bikeData['bikeKinds']=$_POST['bikeKinds'];
          	$bikeData['sexKinds']=$_POST['sexKinds'];

               //如果上传车辆照片开始
               if(!empty($_FILES['photo']['tmp_name'])){
                    $id=$_SESSION['userId'];

                    import('ORG.Net.UploadFile');
                    $upload = new UploadFile();// 实例化上传类
                    $upload->maxSize  = 3145728 ;// 设置附件上传大小

                    // 设置附件上传类型
                    $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');

                    // 设置附件上传目录
                    $upload->savePath =  './Uploads/bikeImgs/'.$id.'/';

                     //php基本语法部分开始，主要任务用于截取上传文件，文件名  
                    $fileName=$_FILES["photo"]["name"];  //这样就能够取得上传的文件名 

                    //通过对$fileName的处理，就能够取得上传的文件的后缀名 
                    $fileExtensions=strrchr($fileName, '.');   

                    //文件重命名“用户Id_上传时间”
                    $serverFileName=$_SESSION['userId']."_".time();

                    //设置在服务器保存的文件名 
                    $upload->saveRule=$serverFileName;

                    if(!$upload->upload()) {      // 上传错误提示错误信息
                         $this->error($upload->getErrorMsg());
                    }else{
                         $info =  $upload->getUploadFileInfo();
                         
                    }
                    //车辆照片上传结束

                    $bikeData['bikeImg']=$serverFileName; 
                    $bikeData['bikeExtension']=$fileExtensions;
               }

               // 保存表单数据 包括附件数据
          	$bikelist=M('Bikelist');
               //将车辆信息存到bikelist表中
          	$bikelist->add($bikeData); 

               $bikeId=$bikelist->max('bikeId');
               $offer=M('Offer_record');
               $offerData['bikeId']=$bikeId;
               $offerData['userId']=$_SESSION['userId'];
               $offerData['offerTime']=date('Y-m-d H-i-s');
               //车辆状态：0：未借出，1：已借出，2：已还车，3：已停供
               $offerData['offerState']=0;   

               //将车辆信息存到Offer_record表中
               $i=$offer->add($offerData); 

          	if($i>0){
          		$this->success('供车成功！');
          	}
          	else{
          		$this->error('供车失败！');
          	}
          }
     	
     }

}

?>