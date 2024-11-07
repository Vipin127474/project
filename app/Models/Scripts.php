<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Scripts extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', // Add user_id to the fillable array
        'title',
        'genre',
        'language',
        'prompt',
        'generated_text',
    ];

    // Define a relationship with the User model (optional, if you want to access the user from the generated text)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
