<?php

namespace App\Models;

//ELOQUENT
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCurso extends Model
{
    use HasFactory;

    // Especifique o nome da tabela explicitamente
    protected $table = 'curso';
    
    //
    protected $fillable = ['nivel','nome_curso'];
}