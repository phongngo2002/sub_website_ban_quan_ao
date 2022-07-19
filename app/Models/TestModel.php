<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TestModel extends Model
{
    use HasFactory;
    protected $table = 'test';

    protected $fillable = ['id','name'];

    public function loadList($params = []){
        $query = DB::table($this->table)
                ->select($this->fillable);
        $lists = $query->get();

        return $lists;
    }

}
