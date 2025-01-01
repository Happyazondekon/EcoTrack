<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $personne_id
 * @property string $input
 * @property string $resultat
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 */
class Calcul extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['personne_id', 'input', 'resultat'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'personne_id');
    }
}
