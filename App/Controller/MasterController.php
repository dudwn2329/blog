<?php
namespace Gondr\Controller;

use Jenssegers\Blade\Blade;

class MasterController {
    public function render($page, $data = []) {

        $blade = new Blade(__VIEW, __CACHE);
        echo $blade->make($page, $data);
    }
    public function json($data, $code = 200){
        header('Content-Type:application/json;charset=utf-8', true, $code);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
    }

    
    public function strip_tag_arrays($str, $strip_tags) {
    $cnt = sizeof($strip_tags);
    for ($i=0; $i<$cnt; $i++) {
     $tag_pattern = "/<{$strip_tags[$i]}>/";
     $str = preg_replace($tag_pattern, '', $str);
     $str = preg_replace("/<\/{$strip_tags[$i]}>/", '', $str);
    }
    return $str;
   }                                           
}