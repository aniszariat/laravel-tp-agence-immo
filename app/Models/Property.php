<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class Property extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function options(): BelongsToMany
    {
        return $this->belongsToMany(Option::class);
    }
    public function getSlug()
    {
        return Str::slug($this->title);
    }
}
