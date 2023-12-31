<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use HasFactory;

    protected $fillable = [
        'id_menu', 'nama', 'harga', 'deskripsi'
    ];
}
