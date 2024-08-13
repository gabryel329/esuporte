<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Responsavel extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'responsavel';
    protected $fillable = ['nome', 'cpf', 'celular'];
    protected $dates=['deleted_at'];

    public function chamado(){
        return $this->belongsToMany(Chamados::class, 'responsavel_id');
    }
}
