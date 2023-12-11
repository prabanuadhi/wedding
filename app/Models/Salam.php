<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salam extends Model
{
    protected $table = "salam";
    protected $primaryKey = "id";
    protected $guarded = ["id"];

    public $timestamps = false;
}