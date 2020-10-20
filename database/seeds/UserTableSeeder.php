<?php


use App\Models\Modality;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //criação dos papeis de usuario
        Role::create([
            'id'            => 1,
            'name'          => 'Super Administrador',
            'description'   => 'Acesso completo a aplicação',
        ]);

        Role::create([
            'id'            => 2,
            'name'          => 'Administrador',
            'description'   => 'Acesso completo a modalidade',
        ]);

        Role::create([
            'id'            => 3,
            'name'          => 'Usuario',
            'description'   => 'Acesso somente aos seus proprios dados',
        ]);

        //criação das modalidades
        Modality::create([
            'name'      => 'Hoquei Tradicional',
            'logo' => 'vapt-fotos.jpeg',
        ]);

        Modality::create([
            'name'      => 'Hoquei Inline',
            'logo' => 'vapt-fotos.jpeg',
        ]);

        User::create([
            'name'              => 'Rodrigo Caldas',
            'email'             => 'rodrigo@vaptfotos.com.br',
            'password'          => bcrypt('123456789'),
            'email_verified_at' => \Carbon\Carbon::now(),
            'image'             => '1-rodrigo-caldas.jpeg',
            'modality_id'       => '1',
            'role_id'           => '1',
        ]);

        User::create([
            'name'              => 'Marcelo',
            'email'             => 'lorena@vaptfotos.com.br',
            'password'          => bcrypt('123456789'),
            'email_verified_at' => \Carbon\Carbon::now(),
            'image'             => '2-lorena-moura.jpeg',
            'modality_id'       => '2',
            'role_id'           => '2',
        ]);
    }
}