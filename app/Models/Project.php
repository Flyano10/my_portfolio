<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // Tambahkan ini agar bisa mass assignment
    protected $fillable = [
        'judul',
        'deskripsi',
        'screenshot',
        'demo_url',
        'github_url',
        'tech_stack'
    ];
    
    protected $casts = [
        'tech_stack' => 'array'
    ];
}
