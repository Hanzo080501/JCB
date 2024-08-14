<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PeluangModel extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'deskripsi',
        'materi',
        'isi',
        'image',
        'file',
        'url',
        'status',
        'published_by',
        'topik_id',
    ];


    public function topik()
    {
        return $this->hasMany(TopikModel::class);
    }

    public function getRouteKeyName()
    {
        return 'title';
    }

    public function scopeFilter(Builder $query, array $filters): void
    {
        $query->when(
            $filters['search'] ?? false,
            fn($query, $search) =>
            $query->where('title', 'like', '%' . $search . '%')
        );
    }




    // public function scopePublished(Builder $query)
    // {
    //     $query->where('status', 'published');
    // }
}
