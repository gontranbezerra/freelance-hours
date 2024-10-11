<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Criação de um usuário?
        // $user = User::query()->create([
        //     'name' => 'Gontran',
        //     'email' => 'gontranbezerra@gmail.com',
        //     'password' => '123456',
        // ]);
        // dd($user);

        // Localizar o usuário pelo id:
        $user = User::find(1);

        // Edição de dados de um usuário:
        // $user->email_verified_at = now();
        // // ou
        // $user->update(['email_verified_at' => now()]);

        // $user->save();

        // dd($user);

        // dd($user->email_verified_at->diffForHumans());

        // Auth::login($user);
        // Auth::logout();

        return view('welcome');
    }
}
