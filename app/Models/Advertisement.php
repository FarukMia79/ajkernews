<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Advertisement extends Model
{
    protected $fillable = [
        'user_id',
        'client_name',
        'target_url',
        'start_date',
        'end_date',
        'placement',
        'image',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
