<?php 

namespace App\Controllers\Backend;
use App\Controllers\BaseController;

class Auth extends BaseController{
    public function login(){
        echo "giriş ekranı";
    }
    public function logout(){
        echo "çıkış ekranı";
    }
}