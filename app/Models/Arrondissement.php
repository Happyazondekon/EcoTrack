<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $commune_id
 * @property string $nom
 * @property string $created_at
 * @property string $updated_at
 * @property Commune $commune
 * @property User[] $users
 */
class Arrondissement extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['commune_id', 'nom'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function commune()
    {
        return $this->belongsTo('App\Models\Commune');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany('App\Models\User');
    }
}
