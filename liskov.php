<?php
require  __DIR__ .'/vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use App\Models\User ;


$user = new User() ;

var_dump($user);
//var_dump(sayHello());
//$client = new Client(["base_uri"=>'https://jsonplaceholder.typicode.com/']);
//try {
//    $request = new Request('GET', '/users');
//    $res = $client->send($request, ['timeout', -3]);
//    $data = json_decode($res->getBody());
//    var_dump($data);
////    var_dump('test');
//} catch (GuzzleException $e) {
//    echo $e->getMessage();
//}
