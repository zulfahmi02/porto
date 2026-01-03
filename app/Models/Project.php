<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'type',
        'technologies',
        'demo_url',
        'code_url',
        'sort_order',
    ];

    protected $casts = [
        'technologies' => 'array',
    ];
}
