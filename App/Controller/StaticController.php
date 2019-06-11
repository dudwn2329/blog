<?php

namespace Gondr\Controller;

use Gondr\DB;
use Gondr\Pager;
class StaticController extends MasterController {
    
    public function index() {
        $page = isset($_GET['p']) ? $_GET['p'] : 1;
        if(!is_numeric($page)){
            $page = 1;
        }
        $sql = "SELECT * FROM boards LIMIT " . ($page-1) * 3 . ", 3";
        $list = DB::fetchAll($sql);
        $imgPattern = '/<img src=".+">/';
        foreach( $list as $item){
            $match = preg_match($imgPattern, $item->image, $matches);
            if($match>0){
                $item->thumbnail = $matches[0];
            }else{
                $item->thumbnail = "<img src='/images/noimage.png'>";
            }
        }
        $pager = new Pager();
        $pager->calc($page);
        $this->render("main", ['list' => $list, "p"=>$pager]);
    }

    public function errorPage($msg) {
        $this->render("error", ['msg'=>$msg]);
    }

}