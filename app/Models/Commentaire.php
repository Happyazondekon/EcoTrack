<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $parent_id
 * @property integer $personne_id
 * @property integer $article_id
 * @property string $contenu
 * @property string $created_at
 * @property string $updated_at
 * @property Article $article
 * @property User $user
 * @property Commentaire $commentaire
 */
class Commentaire extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['parent_id', 'personne_id', 'article_id', 'contenu', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function article()
    {
        return $this->belongsTo('App\Models\Article');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'personne_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function commentaire()
    {
        return $this->belongsTo('App\Models\Commentaire', 'parent_id');
    }
}
