<?php

use Illuminate\Database\Seeder;
use App\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'name' => 'Dieison',
            'email' => 'admin@mail.com',
            'password' => bcrypt('1234567'),
        ];

        if (User::where('email', '=', $dados['email'])->count()) {
            $usuario = User::where('email', '=', $dados['email'])->first();
            $usuario->update($dados);
            echo "Usuario Alterado!";
        } else {
            User::create($dados);
            echo "Usuario Criado!";
        }
    }
}
