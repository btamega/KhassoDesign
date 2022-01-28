<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'Nom' => $_POST['name'],
            'Prenom'=>$_POST['prenom'],
            'email' => $_POST['email'],
            'password' => Hash::make('password'),
            'Ville'=>$_POST['city'],
            'Adresse'=>$_POST['address'],
            'Pays'=>$_POST['country'],
            'CodePostal'=>$_POST['pincode'],
            'Telephone'=>$_POST['mobile']
        ]);
    }
}
