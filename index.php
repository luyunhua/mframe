<?php
/**
 * Created by luyh@59store.com.
 * User: luyh
 * Date: 16/5/30
 * Time: 下午1:42
 */
include __DIR__ . '/boots/autoload.php';

use Tomato\Route\Route;



$route = new Route();
//$route->addRoute('get','/myroute/[number]',function(){
//    //echo '1';
//});
//$route->addRoute('get','/user/[string]',function(){
//    //echo '2';
//});
$route->addRoute('get','/myroute/abc', 'App\Ctrl\DefaultController@index');

$dispatcher = new \Tomato\Route\Dispatcher($route);
$dispatcher->run();