<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Validation\Rules\Password;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function index()
    {
        
        $users = User::paginate(10);
        
        return view('admin.usuarios', compact('users'));
    }

    public function edit(Request $request): View
    {
       
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        //dd(2);
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function destroyUser($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return redirect()->route('usuarios')->with('success', 'Usuario eliminado correctamente');   
    }

    public function editUser(Request $request, $id)
    {
       
        $user = User::findOrFail($id);
    
        $request->validate([
            'usertype' => ['required'],
            'username' => ['required', 'string', 'lowercase', 'max:255', 'unique:'.User::class.',username,'.$user->id, 'regex:/^[a-z0-9_]+$/u'],
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class.',email,'.$user->id],
            'password' => ['nullable', 'confirmed', Password::defaults()],
        ]);
    
        $user->update([
            'usertype' => $request->usertype,
            'username' => $request->username,
            'name' => $request->name,
            'last_name' => $request->last_name,
            'email' => $request->email,
        ]);
    
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
            $user->save();
        }
    
        return redirect()->route('usuarios')->with('success', 'Usuario actualizado correctamente');
    }
    

}
