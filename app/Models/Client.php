<?php

namespace App\Models;

use App\Models\Presenters\ClientPresenter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use TheHiveTeam\Presentable\HasPresentable;

class Client extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Notifiable;
    use HasPresentable;

    protected $presenter = ClientPresenter::class;

    protected $table = 'clients';

    protected $fillable = [
        'name',
        'email',
        'cpf',
        'active',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /** Formata o atributo */
    public function getFormattedActiveAttribute()
    {
        return $this->active ? 'Sim' : 'Não';
    }

    /** Obtém a relação */
    public function address(): HasOne
    {
        return $this->hasOne(Address::class);
    }

    protected static function newFactory()
    {
        return \Database\Factories\ClientFactory::new();
    }
}
