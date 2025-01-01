<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Arrondissement;
use App\Models\Badge;
use App\Models\Commune;
use App\Models\Role;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class UserProfileController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {

        $arrondissements = Arrondissement::all();
        $communes = Commune::all();
        $roles = Role::all();
        $badges = Badge::all();

        return Inertia::render('Edit', compact('arrondissements', 'roles', 'badges', 'communes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProfileUpdateRequest $request)
    {
        $user = $request->user();

        // Debugging: Dump everything about the file upload
        \Log::info('Full Request Data', [
            'all_data' => $request->all(),
            'files' => $request->allFiles(),
        ]);

        // Direct file handling without using validated data
        try {
            if ($request->hasFile('photo_profil')) {
                // Remove existing profile picture
                if ($user->photo_profil) {
                    Storage::disk('public')->delete($user->photo_profil);
                }

                // Get the uploaded file
                $file = $request->file('photo_profil');

                // Generate a unique filename
                $filename = 'profile_'.uniqid().'.'.$file->getClientOriginalExtension();

                // Store file with explicit path
                $storedPath = $file->storeAs('photo_profil', $filename, 'public');

                // Forcibly update user's photo_profil
                $user->photo_profil = $storedPath;
            }

            // Update other user fields
            $user->name = $request->input('name', $user->name);
            $user->prenom = $request->input('prenom', $user->prenom);
            $user->email = $request->input('email', $user->email);
            $user->telephone = $request->input('telephone', $user->telephone);
            $user->sexe = $request->input('sexe', $user->sexe);
            $user->arrondissement_id = $request->input('arrondissement_id', $user->arrondissement_id);

            // Explicitly save
            $user->save();

            return Redirect::route('profile.edit')->with('status', 'Profile updated successfully!');
        } catch (\Exception $e) {
            \Log::error('Profile Update Error', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            return Redirect::back()->withErrors(['error' => 'Failed to update profile: '.$e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validate([
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect()->route('home');
    }
}
