<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'id_user';

    protected $fillable = [
        'name',       
        'email',      
        'username',   
        'password',   
        'role',       
    ];

    protected $hidden = [
        'password',        
        'remember_token',  
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',  
    ];

    /**
     * Mengecek apakah user bisa melakukan read (semua user bisa).
     */
    public function canRead()
    {
        return true;
    }

    /**
     * Mengecek apakah user memiliki akses CRUD (hanya admin).
     */
    public function canManage()
    {
        return $this->role === 'admin';
    }
}
