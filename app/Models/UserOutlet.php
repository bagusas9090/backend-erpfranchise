<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOutlet extends Model
{
    use HasFactory;
    // Kita set kolom mana saja yang boleh diisi via API
    protected $fillable = [
        'user_id',
        'outlet_id'
    ];

    // --- TAMBAHKAN RELASI INI ---
    // 1. Satu User bisa punya banyak Outlet (tapi lewat tabel user_outlet)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // 2. Satu Outlet bisa punya banyak User (tapi lewat tabel user_outlet)
    public function outlet()
    {
        return $this->belongsTo(Outlet::class);
    }
}
