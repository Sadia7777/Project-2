<?php

namespace App\Models;
use App\Models\BlogCategories;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function BlogCategory(): BelongsTo
    {
        return $this->belongsTo(BlogCategories::class);
    }
}
