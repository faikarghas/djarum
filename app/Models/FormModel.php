<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormModel extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "form";
    protected $primaryKey = 'id';
    protected $fillable = ['id','name','phone','email','city','message','type'];
}