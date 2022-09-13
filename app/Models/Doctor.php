<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table = 'doctors';
    use HasFactory;


    public $timestamps = false;
    public function service(){
        // hasOne
        // belongsTo
        return $this->belongsTo(Service::class,'serid', 'id');
    }

    protected $fillable = [
        'name',
        'email',
        'serid',
    ];
}
