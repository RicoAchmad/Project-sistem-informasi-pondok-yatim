<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemasukan extends Model
{
    use HasFactory;

    protected $fillable = ['donator_id' , 'jumlah_donasi'];
    public $timestamp = true;

    public function donatur()
    {
        return $this->belongsTo('App\Models\Donatur', 'donatur_id');
    }
}