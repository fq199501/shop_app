<?php
namespace app\index\controller;

use think\Controller;
//财务管理
class Finance extends Controller
{
    public function index()
    {
        return $this->fetch('cj-ckd');
    }
}
