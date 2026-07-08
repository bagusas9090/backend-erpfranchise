<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;
    // Memberi tahu Laravel kolom mana yang boleh diisi melalui API
    protected $fillable = ['nama_outlet', 'alamat'];
}
