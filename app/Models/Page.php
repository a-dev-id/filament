<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_name',
        'title',
        'slug',
        'subtitle',
        'excerpt',
        'description',
        'banner_image',
        'cover_image',
        'button_text',
        'button_link',
        'meta_title',
        'meta_description',
        'is_active',
    ];

    public function images(): HasMany
    {
        return $this->hasMany(PageImage::class);
    }

    public function CustomFields(): BelongsToMany
    {
        return $this->belongsToMany(CustomField::class);
    }
}
