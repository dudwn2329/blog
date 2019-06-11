<?php

namespace Gondr\Controller;

use Gondr\DB;

class PostController extends MasterController {
    
    public function writePage() {

        $this->render("post/write");
        
    }

    public function writeProcess() {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $writer = $_SESSION['user']->id;
        $imgPattern = '/<img src=".+">/';
        $contentPattern = '/<figcaption.+figcaption>/';
        $strip_tags = ["figcaption"];
        
        
        $match = preg_match($imgPattern, $content, $matches);
        $image = "";
        
        if($match>0){
            $image = $matches[0];
            $match = preg_match($contentPattern, $content, $matches);
            if($match>0){
                $content = $matches[0];
            }
        }
        $content = $this->strip_tag_arrays($content, $strip_tags);
        $sql = "INSERT INTO boards(`title`, `image`, `content`, `writer`, `wdate`) VALUES (?, ?, ?, ?, NOW())";

        $cnt = DB::query($sql, [$title, $image, $content, $writer]);

        if($cnt != 1) {
            $_SESSION['flash_msg'] = ['msg' => '글 작성중 오류 발생'];
            header("Location: /post");
        }else {
            $_SESSION['flash_msg'] = ['msg' => '글이 작성되었습니다'];
            header("Location: /");
        }
    }

    public function uploadHandle(){
        if(!isset($_FILES['upload']) || $_FILES['upload']['name'] === ""){
            $this->json(['error'=>['msg'=>'이미지가 없습니다']], 400);
            exit;
        }
        
        //여기까지 코드가 왔다면 업로드 파일은 존재하는 거다.
        $file = $_FILES['upload'];

        $uploadDir = "uploads/" . date("Ymd", time());
        if(!file_exists($uploadDir)){
            mkdir($uploadDir, 0777, true);
        }

        $filename = date("ymdHis") . "_" . $file['name'];
        $fileDest = $uploadDir . "/" . $filename;
        move_uploaded_file($file['tmp_name'], $fileDest);

        $this->json(['url' => '/' . $fileDest]);

    }

    public function viewPage(){
        if(!isset($_GET['id'])){
            $_SESSION['flash_msg'] = ['msg' => '존재하지 않는 글'];
            header("Location: /");
            exit;
        }

        $id = $_GET['id'];

        $data = DB::fetch("SELECT * FROM boards WHERE id = ?", [$id]);
        
        if(!$data){
            $_SESSION['flash_msg'] = ['msg' => '존재하지 않는 글'];
            header("Location: /");
            exit;
        }

        $this->render("post/view", ['data'=>$data]);
    }
}