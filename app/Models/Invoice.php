<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Invoice extends Model
{
    protected $table = 'invoice';
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'phone',
        'serid',
        'address',
        'email',
        'discount',
        'date',
        'total',
       

    ];


    public $timestamps = false;
    public function service()
    {
        // hasOne
        // belongsTo
        return $this->belongsTo(Service::class, 'serid', 'id');
    }
}

