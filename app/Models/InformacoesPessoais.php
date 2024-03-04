<?php
// app/Models/InformacoesPessoais.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InformacoesPessoais extends Model
{
    protected $fillable = ['nome', 'sobrenome', 'email'];
}
