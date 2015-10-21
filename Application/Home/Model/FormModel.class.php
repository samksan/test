<?php
namespace Home\Model;
use Think\Model;

class FormModel extends Model{
    // auto validate
    protected $_validate = array(
            array('title','require','必须有标题'),
        );

    // auto complete
    protected $_auto = array(
            array('create_time','time',1,'function'),
        );
}