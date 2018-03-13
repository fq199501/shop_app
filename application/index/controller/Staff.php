<?php
namespace app\index\controller;

use think\Controller;
//员工管理
class Staff extends Controller
{
    public function index()
    {
        return $this->fetch('yg-jbxx');
    }

    public function add(){
        return $this->fetch('yg-jsgl-tc');
    }

    public function del(){
        return $this->fetch('yg-jsgl-tc');
    }

    public function edit(){
        return $this->fetch('yg-jsgl-tc');
    }
}
