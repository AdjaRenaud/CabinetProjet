<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
           // Trouvez l'utilisateur par son email
           $user = User::where('email', 'elieadiko5@gmail.com')->first();

           if ($user) {
               // Mettez à jour le rôle de l'utilisateur
               $user->role = 'admin';
               $user->save();
    }
}
}