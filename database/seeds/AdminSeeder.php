<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Administrador
        Model::unguard();
        $user = new User();
        $user->name = "Admin";
        $user->email = "admin@admin.com" ;
        $user->password = Hash::make('admin');
        $user->save();
    }
}
