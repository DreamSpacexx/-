<?php
namespace app\index\controller;
use think\Request;


class Index
{
    public function index()
    {

        $request = Request::instance();
        echo '当前的域名'. $request->domain().'<br />';
        dump($request);

    }
}
