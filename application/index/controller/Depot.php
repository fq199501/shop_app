<?php
namespace app\index\controller;

use think\Controller;
//库房管理
class Depot extends Controller
{
    public function index()
    {
        return $this->fetch('ckgl');
    }

    public function add(){
        return $this->fetch('tc-ck');
    }

    public function detail(){
        return $this->fetch('tc-ck-xq');
    }
}
