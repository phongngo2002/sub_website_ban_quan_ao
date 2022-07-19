<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Teacher extends Model
{
    use HasFactory;

    protected $table = 'teachers';

    protected $fillable = ['id','ten_gv','ngay_giang_day'];

    public function loadList($params = []){
        $query = DB::table($this->table)
                ->select($this->fillable);

        return $query->get();
    }

}
