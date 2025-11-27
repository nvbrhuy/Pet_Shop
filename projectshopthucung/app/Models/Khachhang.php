<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Khachhang extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'hoten', 'email', 'password', 'diachi', 'sdt', 'id_phanquyen'
    ];

    protected $hidden = [

    ];
    protected $casts = [
        'id_kh' => 'int',
        'sdt' => 'int',
        'id_phanquyen' => 'int',
    ];

    public $timestamps = false;
    protected $table = 'khachhang';
    protected $primaryKey = 'id_kh';

    public function setPasswordAttribute($value)
    {

        $this->attributes['password'] = $value;
    }

    public function getAuthPassword()
    {
        return $this->attributes['password'];
    }
}
