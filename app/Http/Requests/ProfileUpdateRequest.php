<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'prenom' => ['nullable', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            // 'photo_profil' => ['nullable', 'string', 'sometimes'],
            'photo_profil' => ['nullable', File::image()->max(5 * 1024), // 5MB max
            ],
            'telephone' => ['nullable', 'string'],
            'sexe' => ['nullable', 'in:M,F,A'],
            'arrondissement_id' => ['nullable', 'exists:arrondissements,id'],
            'role_id' => ['nullable', 'exists:roles,id'],
            'badge_id' => ['nullable', 'exists:badges,id'],
        ];
    }
}
