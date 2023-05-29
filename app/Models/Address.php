<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    use HasFactory;

    protected $table = 'addresses';

    protected $fillable = [
        'client_id',
        'zipcode',
        'street',
        'number',
        'comp',
        'district',
        'info',
        'uf',
        'city',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /** Obtém a relação */
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class)->withTrashed();
    }
}
