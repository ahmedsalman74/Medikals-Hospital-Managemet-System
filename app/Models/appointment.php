<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    protected $table = 'appointments';
    use HasFactory;
    protected $fillable = [
        'AppID',
        'pname',
        'phone',
        'serid',
        'DocID',
        'date',
        'userid'


    ];

    public function doctor()
    {
        // hasOne
        // belongsTo
        return $this->belongsTo(Doctor::class, 'docid', 'id');
    }


    public function user()
    {
        // hasOne
        // belongsTo
        return $this->belongsTo(User::class, 'userid', 'id');
    }

    public $timestamps = false;
    public function service()
    {
        // hasOne
        // belongsTo
        return $this->belongsTo(Service::class, 'serid', 'id');
    }
}
