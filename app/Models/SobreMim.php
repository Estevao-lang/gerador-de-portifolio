<?php
// app/Models/SobreMim.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SobreMim extends Model
{
    protected $table = 'sobre_mim'; // Adicione esta linha

    protected $fillable = ['nome', 'sobrenome', 'email', 'content'];
}
