<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @property int $id
 * @property int $role_id
 * @property int $badge_id
 * @property int $arrondissement_id
 * @property string $name
 * @property string $prenom
 * @property string $sexe
 * @property string $telephone
 * @property string $email
 * @property string $email_verified_at
 * @property string $password
 * @property string $photo_profil
 * @property string $remember_token
 * @property string $created_at
 * @property string $updated_at
 * @property Commentaire[] $commentaires
 * @property AuteurArticle[] $auteurArticles
 * @property Badge $badge
 * @property Arrondissement $arrondissement
 * @property Role $role
 * @property Donation[] $donations
 * @property Calcul[] $calculs
 */
class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;

    /**
     * @var array
     */
    protected $fillable = ['role_id', 'badge_id', 'arrondissement_id', 'name', 'prenom', 'sexe', 'telephone', 'email', 'password', 'photo_profil'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function commentaires()
    {
        return $this->hasMany('App\Models\Commentaire', 'personne_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function auteurArticles()
    {
        return $this->hasMany('App\Models\AuteurArticle', 'auteur_id');
    }

    /**
     * Relationship with articles.
     * Returns the articles authored by the user.
     */
    public function articles()
    {
        return $this->belongsToMany(Article::class, 'auteur_article', 'auteur_id', 'article_id')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function badge()
    {
        return $this->belongsTo('App\Models\Badge');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function arrondissement()
    {
        return $this->belongsTo('App\Models\Arrondissement');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }

    public function isAdmin()
    {
        return $this->role && $this->role->nom === 'Administrateur';
    }

    public function isAuteur()
    {
        return $this->role && $this->role->nom === 'Auteur';
    }

    public function isUtilisateur()
    {
        return $this->role && $this->role->nom === 'Utilisateur';
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function donations()
    {
        return $this->hasMany('App\Models\Donation', 'personne_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function calculs()
    {
        return $this->hasMany('App\Models\Calcul', 'personne_id');
    }
}
