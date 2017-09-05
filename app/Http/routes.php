<?php  
$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function ($api) {
    $api->get('/dingo',function(){
        return "hello world";
    });
});
