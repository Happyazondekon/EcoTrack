<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class Article extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'titre',
        'contenu',
        'statut',
        // 'image',
    ];

    /**
     * Relation avec les utilisateurs (auteurs).
     */
    public function auteurs()
    {
        return $this->belongsToMany(User::class, 'auteur_article', 'article_id', 'auteur_id')->withTimestamps();
    }

    /**
     * Scope pour récupérer les articles publiés.
     */
    public function scopePublished($query)
    {
        return $query->where('statut', 'Publié');
    }

    /**
     * Règles de validation.
     */
    public static function validationRules()
    {
        return [
            'titre' => 'required|max:150',
            'contenu' => 'required',
            'statut' => [
                'required',
                Rule::in(['Brouillon', 'Publié']),
            ],
            // 'image' => 'nullable|image|max:2048',
        ];
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function commentaires()
    {
        return $this->hasMany('App\Models\Commentaire');
    }
}
