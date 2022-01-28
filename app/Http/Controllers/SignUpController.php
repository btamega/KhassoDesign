<?php

namespace App\Http\Controllers;

use Database\Seeders\UserSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Database\Seeder;
class SignUpController extends Controller
{
    //
    public function store()
    {
        // Artisan::call(UserSeeder::class); 
        return redirect('/');
    }
}
