<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\{Builder, Model};

/**
* Destination
*
* @mixin Builder
*/
class Destination extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
