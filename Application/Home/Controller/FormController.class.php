<?php
namespace Home\Controller;
use Think\Controller;

/**
* Form Controller
*/
class FormController extends Controller
{
    
    function insert()
    {
        // init Table Form
        $Form = D('Form');

        if($Form->create()){
            $result = $Form->add();
            if($result){
                $this->success('success');
            }else{
                $this->error('Failed');
            }
        }else{
            $this->error($Form->getError());
        }

    }

    
    function read($id=1){
        $Form = M('Form');
        $data = $Form->find($id);
        if($data){
            $this->assign('data',$data);
        }else{
            $this->error('error');
        }

        $this->display();
    }
}