<?php

namespace App\Controllers;

class StokController extends BaseController
{
    private $session;
    private $userModel;

    public function __construct()
    {
        $this->userModel =  new \App\Models\UserModel();
        $this->session =  \Config\Services::session();
    }
    public function stok(){
        
        return view('stok/index');
    }
}