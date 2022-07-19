<?php

namespace App\Http\Controllers;

use App\Models\TestModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Test2Controller extends Controller
{
    //
    private $v;
    public function __construct(){
        $this->v = [];
    }


    public function index(){
//        $players = DB::table('test')->get();
//        $this->v['players'] = $players;
        $this->v['tieu_de'] = '123456';
//        $objTest = new TestModel();
//        $test = $objTest->loadList();
//        $this->v['players'] = $test;
        return view('user.index',$this->v);
    }

}
