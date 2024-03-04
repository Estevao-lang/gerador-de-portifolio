<?php

// app/Models/ExperienciaProfissional.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExperienciaProfissional extends Model
{
    protected $fillable = ['cargo', 'empresa', 'descricao'];
}
