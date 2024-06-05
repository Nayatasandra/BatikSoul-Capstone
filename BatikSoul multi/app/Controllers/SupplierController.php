<?php

namespace App\Controllers;

class SupplierController extends BaseController
{
    private $session;
    private $userModel;

    public function __construct()
    {
        $this->userModel =  new \App\Models\UserModel();
        $this->session =  \Config\Services::session();
    }
    public function supplier(){
        
        return view('supplier1/index');
    }
}