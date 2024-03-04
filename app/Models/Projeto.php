<?php

// app/Models/Projeto.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    protected $fillable = ['nome', 'descricao_projeto'];
}

