<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use illuminate\Database\Eloquent\SoftDeletes;

class Kegiatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'deskripsi',
        'image',
    ];

    // use SoftDeletes;
    public function scopeFilter(Builder $query, array $filters): void
    {
        $query->when(
            $filters['search'] ?? false,
            fn($query, $search) =>
            $query->where('title', 'like', '%' . $search . '%')
        );
    }
}
