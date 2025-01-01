<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $personne_id
 * @property string $source
 * @property float $montant
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 */
class Donation extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['personne_id', 'source', 'montant', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'personne_id');
    }
}
