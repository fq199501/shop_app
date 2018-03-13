<?php
namespace app\index\controller;

use think\Controller;
//首页
class Index extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}
