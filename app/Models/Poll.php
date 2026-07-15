<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Poll extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'question',
        'options',
        'start_date',
        'end_date',
        'status',
    ];

    protected $casts = [
        'options' => 'array',
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
