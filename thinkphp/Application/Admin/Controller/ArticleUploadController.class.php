<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Model;
class ArticleUploadController extends Controller {
    public function index(){
        check_admin();
    	$this->display();
    }
    public function kedit(){
        $data['title']=I("post.title");
        $data['content']=I('post.content');
        //echo I('post.content');

        $article=M('article');

        if($article->add($data)){
            $this->success('上传成功');
        }else{
            $this->error('上传失败');
        }
        
    }
    public function kindfile(){
        if (IS_POST) {          
            $upload = new \Think\Upload();
            $upload->maxSize   =     10*1024*1024 ;
            $upload->exts      =     array('gif', 'jpg', 'jpeg', 'png', 'bmp','swf', 'flv','swf', 'flv', 'mp3', 'wav', 'wma', 'wmv', 'mid', 'avi', 'mpg', 'asf', 'rm', 'rmvb','doc', 'docx', 'xls', 'xlsx', 'ppt', 'htm', 'html', 'txt', 'zip', 'rar', 'gz', 'bz2');
            $dir_name = empty($_GET['dir']) ? 'image' : trim($_GET['dir']);
            $upload->rootPath  =     './'; 
            $upload->savePath  =     'Uploads/'.$dir_name.'/'; 
            $path="/";
            $file = $upload->upload();
            if ($file) {
                $file_url =__ROOT__.$path.$file['imgFile']['savepath'] . $file['imgFile']['savename'];
                    echo json_encode(array('error' => 0, 'url' => $file_url));//返回的信息必须是json格式的
            } else {
                $this->error($upload->getError());//获取失败信息
            }
        }
    }
    public function kindQiniu(){
        $setting=C('UPLOAD_SITEIMG_QINIU');
        $Upload = new \Think\Upload($setting);
        $info = $Upload->upload($_FILES);
        if($info){
            $url=$info['imgFile']['url'];
            $url=Qiniu_Sign($url);
            echo json_encode(array('error'=>0,'url'=>$url));           
        }else{
            $this->error('upload failed');
        }
    }
}
/*
array(1) { ["imgFile"]=> array(10) { ["name"]=> string(28) "2018-02-09/5a7d07140b0e0.png" ["type"]=> string(9) "image/png" ["size"]=> int(5379) ["key"]=> string(7) "imgFile" ["ext"]=> string(3) "png" ["md5"]=> string(32) "148263a8baba14ce46bd795fa7ef8fcf" ["sha1"]=> string(40) "0a3a055ec156638ff1ca96e7d1966fb46c10fddf" ["savename"]=> string(17) "5a7d07140b0e0.png" ["savepath"]=> string(11) "2018-02-09/" ["url"]=> string(61) "http://p3u1lifj3.bkt.clouddn.com/2018-02-09_5a7d07140b0e0.png" } }

<a class="ke-insertfile" href="/xhust/thinkphp/Uploads/file/2018-02-09/5a7d839405f13.docx" target="_blank">端口说明</a>

<embed src="/xhust/thinkphp/Uploads/media/2018-02-09/5a7d83dbb1d78.mp3" type="video/x-ms-asf-plugin" width="550" height="400" autostart="false" loop="true" /><br />

<img src="/xhust/thinkphp/Uploads/image/2018-02-09/5a7d8407c9682.jpg" alt="" /><br />
*/