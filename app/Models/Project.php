<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'description',
        'url'
    ];


    public function skills():BelongsToMany
     {
        return $this->belongsToMany(Skill::class);
    }
}
