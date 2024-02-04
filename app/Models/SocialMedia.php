<?php

namespace App\Models;

use App\Models\User;
use App\Models\Platform;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SocialMedia extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'user_id',
        'platform_id'
    ];
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    public function platform()
    {
        return $this->belongsTo(Platform::class);
    }
}
