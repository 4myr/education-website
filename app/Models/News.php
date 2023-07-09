<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Storage;

class News extends Model
{
    use HasFactory;

    protected $appends = ['image_url'];

    protected $fillable = ['title', 'content', 'image', 'is_active', 'admin_id'];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function getImageUrlAttribute(): string|null
    {
        $imagePath = $this->image;
        if (!$imagePath) return null;
        if (Str::startsWith($imagePath, ['http', 'https'])) {
            return $imagePath;
        }
        return Storage::disk('public')->url($imagePath);
    }
}
