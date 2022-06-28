<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    use HasFactory;
    protected $fillable=[
        'nip','nama','mapel','jabatan','foto'
    ];

    public function scopeFillter($query, array $fillters)
    {
        $query->when($fillters['search'] ?? false, function($query, $search)
        {
            return $query->where('id', 'like', '%'.$search.'%')
                         ->orWhere('nama', 'like', '%'.$search.'%');
        });
        
    }
}
