<?php

namespace Gondr\Controller;

use Gondr\db;
class PostController extends MasterController{
    public function writePage(){
        $this->render("post/write");
    }

    public function writeProcess(){
        $title = $_POST['title'];
        $content = $_POST['content'];
        $writer = $_SESSION['user']->id;
        $sql = "INSERT INTO boards(`title`,`content`,`writer`,`wdate`) VALUES (?, ?, ?, now())";
        $cnt = DB::query($sql, [$title, $content, $writer]);

        if($cnt != 1){
            $_SESSION['flast_msg'] = ['msg'=>'글 작성중 오류 발생'];
            hedaer("Location: /post");
        }else{
            $_SESSION['flast_msg'] = ['msg'=>'작성완료'];
        }
    }
}