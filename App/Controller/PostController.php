<?php

namespace Gondr\Controller;

use Gondr\DB;

class Postcontroller extends MasterController {
    public function writePage(){
        $this->render("post/write");
    }

    public function writeProcess(){
        $title = $_POST['title'];
        $content = $_POST['content'];
        $writer = $_SESSION['user']->id;

        $sql= "INSERT INTO boards 
                (`title`, `content`, `writer`, `wdate`)
                VALUES (?, ?, ?, NOW())";
        $cnt = DB::query($sql, [$title, $content, $writer]);

        if($cnt != 1){
            $_SESSION['flash_msg'] = ['msg'=>'글 작성중 오류 발생'];
            header("Location: /post");
        }else{
            $_SESSION['flash_msg'] = ['msg'=>'글이 작성되었습니다.'];
            header("Location: /");
        }
    }
}