<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable=['category_name','order_number','category_status','added_on'];
    use HasFactory;
}
