<?php
/**
 * Created by luyh@59store.com.
 * User: luyh
 * Date: 16/5/30
 * Time: 下午1:42
 */
include __DIR__ . '/boots/autoload.php';

//$fileRoute = new \Tomato\Route\FileRoute();
//$fileRoute->get('/myroute/abc/\d+' ,'App\Ctrl\DefaultController@index');
//$fileRoute->post('/myroute/post/\w+/d' ,'App\Ctrl\DefaultController@index2');
//
//$dispatcher = new \Tomato\Route\Dispatcher($fileRoute);
//$dispatcher->run();

echo 'Ioc Container';

$ioc = \Tomato\Foundation\Container::singleton();

$ioc->set('beanA', function(){
    return new stdClass();
});

$beanA = $ioc->get('beanA');
xdebug_debug_zval('beanA');


