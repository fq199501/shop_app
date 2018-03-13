<?php
namespace app\index\controller;

use think\Controller;
//订单管理
class Order extends Controller
{
    public function index()
    {
        return $this->fetch('dd-ddgl');
    }
}
