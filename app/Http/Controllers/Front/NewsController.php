<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function GetIndex(){
        //   return view('welcome')->with('data1',3);
        //    return view('welcome')->with(['data1'=>2,'data2'=>3]);
        /*$data=[];
        $data['id']=5;
        $data['name']='majd';*/
//        return view('welcome',$data);
        $data=['ali','majd','sami'];
//        $data=[];
//        return view('welcome',compact('data'));
        return view('welcome')->with('data',$data);
        /*$obj=new \stdClass();
        $obj->id=5;
        $obj->name='ali';
        $obj->age=30;
        return view('welcome',compact('obj'));*/
    }
    public function about(){
        return view('about');
    }
}

