<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Explore extends Model
{
    use HasFactory;

    protected $fillable = ['body', 'like', 'dislike', 'share', 'bookmark',];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
