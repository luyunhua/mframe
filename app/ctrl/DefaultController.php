<?php
namespace App\Ctrl;

/**
 * Created by luyh@59store.com.
 * User: luyh
 * Date: 16/5/31
 * Time: 上午1:40
 */
class DefaultController
{
    public function index()
    {
        $refArray = ['a','b','c'];
        echo 'hello tiny';
    }

    public function index2()
    {
        print_r($_GET);
        print_r($_POST);
    }

}