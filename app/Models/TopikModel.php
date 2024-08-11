<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopikModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'deskripsi',
        'image',
        'slug',
        'status',
    ];

    public function peluang()
    {
        return $this->belongsTo(PeluangModel::class);
    }
    public function getRouteKeyName()
    {
        return 'title';
    }
}
