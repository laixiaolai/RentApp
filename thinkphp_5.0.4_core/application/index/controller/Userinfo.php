<?php
namespace app\index\controller;
use app\common\model\UserinfoModel;

class Userinfo
{
    public function index()
    {
        $userinfoModel=new UserinfoModel();
        dump($userinfoModel);
    }
}