<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Controllers\task;

class M_task extends Model
{
    use HasFactory;
    protected $table = 'task';
    public $timestamps = false;
}
