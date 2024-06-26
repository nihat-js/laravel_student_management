<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Students extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="students";
    protected $primaryKey = "id";
    protected $fillable = ["name","address","mobile"];



}
