<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History_lelang extends Model
{
    use HasFactory;

    protected $table = 'history_lelang';
    protected $guarded = ['id_barang'];
}
