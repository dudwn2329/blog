<?php
namespace Gondr\Controller;

class StaticController extends MasterController {
    public function index(){
        $this->render("main");
    }

    public function errorPage($msg){
        $this->render("error", ['msg'=>$msg]);
        
    }
}