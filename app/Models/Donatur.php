<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donatur extends Model
{
    use HasFactory;

    protected $fillable = ['nama' , 'alamat' ,'no_whatsapp' , 'email'];
    public $timestamp = true;

    public function pemasukan()
    {
        return $this->hasOne('App\Models\Pemasukan', 'donatur_id');
    }
}
