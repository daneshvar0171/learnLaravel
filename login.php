<?php
namespace App;
require 'bootstrap.php';

use App\Models\User;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $validate = new Validation();
    $validate->checkNull($_POST);
    if(!is_null($validate->getError())) {
        header("location:/?errors={$validate->getError()}");
    }
    $user = new User();
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $data = compact('userName', 'password');
    $result = $user->select($data);
    if(empty($result))
        header('LOCATION:/');
    else {
        // login to website
        header('location:/User/login.php');
    }

}
else {
    header('LOCATION:/');
}




