<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Task extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'list'
    // ];
    protected $guarded = [];

    public function cari($search)
    {

        return DB::table('tasks')->where('list','like',"%$search")->get();
    }
}
