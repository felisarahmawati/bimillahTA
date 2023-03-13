<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Katalog extends Model
{
    use HasFactory;

    protected $table = "katalog_buku";

    protected $fillable = [
        'id_katalog',
        'nama_katalog',
        'slug'
    ];

    protected $primaryKey = 'id_katalog';

    protected $keyType = 'string';

    public $incrementing = false;

    public $timestamps = false;
}
