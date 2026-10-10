<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Matikan timestamp karena di tabel MySQL tidak ada kolom created_at/updated_at
    public $timestamps = false; 

    protected $fillable = ['name', 'price', 'description'];
}