<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
class UserController extends Controller
{
    //
    public function store(Request $request){
        $user = new User();
        $user->Nom = request('name');
        $user->Prenom = request('prenom');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));
        $user->Ville = request('city');
        $user->Adresse =request('address');
        $user->Pays =request('country');
        $user->CodePostal =request('pincode');
        $user->Telephone =request('mobile');
        $user->save();

        return redirect()->intended('/login')->with('alert', 'Votre inscription est bien terminée');
    }
    public function select(){

        return Redirect('/');
    }
}
