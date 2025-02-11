<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    use HasFactory;
    
    protected $table = 'users';
    
    protected $fillable = ['nama', 'username', 'email', 'is_admin', 'activation_status'];

    // public function complaints()
    // {
    //     return $this->hasMany(Pengaduan::class, 'user_id'); 
    // }
}