<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    use HasFactory;

    protected $table = 'murids';
    protected $PrimaryKey = 'NIK';

    public $incrementing = false;
    public $timestamps = true;
}