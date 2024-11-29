<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    use HasFactory;

    protected $guarded = [];
    
    public function users()
    {
        return $this->belongsTo(User::class, 'event_id');
    }
}
