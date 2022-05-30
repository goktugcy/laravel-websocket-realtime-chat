<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class messages extends Model
{
    use HasFactory;
    protected $fillable = ['content', 'chat_id'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function chat()
    {
        return $this->belongsTo('App\Models\Chat');
    }
}