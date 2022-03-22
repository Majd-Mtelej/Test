<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('Add');
    }

    public function All(){
        return 'All';
    }
    public function Add(){
        return 'Add';
    }
    public function Update(){
        return 'Update';
    }
    public function Delete(){
        return 'Delete';
    }
}
