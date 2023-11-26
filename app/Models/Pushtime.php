<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pushtime extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'time',
        'user_id',
        'judge',
        ];
    
     public function user(){
        return $this->belongsTo(User::class);
    }
}
