<?php
namespace app\index\controller;

use think\Controller;
//客户管理
class Consumer extends Controller
{
    public function index()
    {
        return $this->fetch('kh-khgl');
    }
}
