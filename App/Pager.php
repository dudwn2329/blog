<?php
namespace Gondr;

class Pager{
    public $start;
    public $end;
    public $totalPage;
    public $prev = true;
    public $next = true;

    public $itemPerPage = 3; //페이지당 글 갯수
    public $pagePerChapter = 5;
    public $current = 1;

    public function calc($page){
        $this->current = $page;

        $sql = "SELECT count(*) AS cnt From boards";
        $this->totalCnt = DB::fetch($sql)->cnt;
        $this->totalPage = ceil($this->totalCnt / $this->itemPerPage);
        $this->end = ceil($this->current / $this->pagePerChapter) * $this->pagePerChapter;
        $this->start = $this->end - $this -> pagePerChapter + 1;

        if($this->end >= $this->totalPage){
            $this->end = $this->totalPage;
            $this->next = false;
        }

        if($this->start == 1){
            $this->prev = false;
        }
    }
}