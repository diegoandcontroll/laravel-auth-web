<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\WelcomeMail;
use App\Models\User;

use App\Providers\RouteServiceProvider;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Ramsey\Uuid\Uuid;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'repeat_password' => 'required|min:6',
            'image' => 'required'
        ]);

        if ($validatedData['password'] === $validatedData['repeat_password']) {
            $user = new User();
            $user->id = Uuid::uuid4();
            $user->name = $validatedData['name'];
            $user->email = $validatedData['email'];
            $user->password = Hash::make($validatedData['password']);
            $user->role = 'user';
            $user->uuid = $user->id;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $folder = 'laravel';
                $filename = uniqid() . '_' . $image->getClientOriginalName();
                $uploadedFileUrl = Cloudinary::upload($image->getRealPath(), [
                    'folder' => $folder,
                    'public_id' => $filename,
                ])->getSecurePath();
                $user->image = $uploadedFileUrl;
                $user->save();
                event(new Registered($user));
                Mail::to($user->email)->send(new WelcomeMail($user));
                return redirect(RouteServiceProvider::HOME);
            }
        }
    }
}
