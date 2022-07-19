<?php

namespace App\Http\Controllers;

use App\Models\TestModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    //
    public function index(){
        echo 'Hello  world';
//        dd(TestModel::all());
        return view('test.index');
    }
    public function update(){
        echo 'Day la phuong thuc update';
    }
}
