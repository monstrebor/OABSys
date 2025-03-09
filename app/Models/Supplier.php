<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'supplier_name',
        'supplier_location',
        'supplier_contact',
        'creator_id',
        'product_id',
    ];

    public function user()
    {
        return $this->hasOne(User::class,'creator_id','id');
    }
}
