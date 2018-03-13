<?php
namespace app\index\controller;

use think\Controller;
//商品管理
class Product extends Controller
{
    public function index()
    {
        return $this->fetch('sp-spgl-tc');
    }
}
