<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chamados extends Model
{
    use HasFactory, SoftDeletes;

    protected $table='chamandos';
    protected $fillable=['categoria', 'prioridade', 'status', 'mensagem', 'responsavel_id'];

    protected $dates=['deleted_at'];

    public function responsavel(){
        return $this->belongsTo(Responsavel::class, 'responsavel_id');
    }
}
