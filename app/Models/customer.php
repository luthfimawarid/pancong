<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    protected $table = 'customers2';
    protected $primaryKey = 'id';
    protected $fillable = [
        'email', 'nomor_tlp', 'username', 'password', 'jenis_kelamin', 'alamat', 'id'
];
}