<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Ejecucion de seed con modelos
        $user = User::create([
            'name' => 'Juan P',
            'email' => 'ju.guinart@live.cl',
            'password' => Hash::make('ju.guinart@live.cl'),
            'url' => 'http://codigojuan.com'
        ]);

        //$user->userToPerfil()->create();

    }
}
