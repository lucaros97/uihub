<?php

namespace App\Models;

use App\Framework;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Shot extends Model
{
    protected $guarded = [''];
    protected $with = ['image', 'user', 'framework'];

    public function image()
    {
        return $this->hasMany(ShotsImage::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function framework()
    {
        return $this->belongsTo(Framework::class);
    }
}
