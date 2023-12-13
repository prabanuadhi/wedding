<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kado extends Model
{
    protected $table = "kado";
    protected $primaryKey = "id";
    protected $guarded = ["id"];

    public $timestamps = false;
}