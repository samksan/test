<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        echo '<h1 style="text-align:center">';
        echo '当前的网址是：';
        echo U('Home/Index/index','',true,true);
        echo '</h1>';
    }
}