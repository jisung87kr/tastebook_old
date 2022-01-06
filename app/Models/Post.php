<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public $fillable = ['user_id', 'subject', 'content'];

    public static $allowSortings = [
        'id',
        'created_at',
        'name',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
