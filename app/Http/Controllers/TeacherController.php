<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //

    public function __construct(){
        $this->v = [];
    }


    public function index(){
        $obj = new Teacher();
        $teachers = $obj->loadList();

        $this->v['teachers'] = $teachers;

        return view('index',$this->v);
    }
}
