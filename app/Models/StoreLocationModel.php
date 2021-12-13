<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreLocationModel extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "store_location";
    protected $primaryKey = 'id';
    protected $fillable = ['id','city','metro','store_name','store_type','address','coordinate','updated_at','created_at'];
}