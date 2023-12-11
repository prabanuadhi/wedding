<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    protected $table = "tamu";
    protected $primaryKey = "id";
    protected $guarded = ["id"];

    public $timestamps = false;
}