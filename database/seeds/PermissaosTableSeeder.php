<?php

use Illuminate\Database\Seeder;
use App\Models\Permissao;

class PermissaosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permissao::create([
           'cadastrar_usuario' => '0',
            'cadastrar_avaliacao' => '0',
            'cadastrar_indicador' => '0',
            'edit_delete_usuario' => '0',
            'edit_delete_avaliacao' => '0',
            'edit_delete_indicador' => '0',
        ]);
        Permissao::create([
            'cadastrar_usuario' => '1',
            'cadastrar_avaliacao' => '1',
            'cadastrar_indicador' => '1',
            'edit_delete_usuario' => '1',
            'edit_delete_avaliacao' => '1',
            'edit_delete_indicador' => '1',
        ]);
    }
}
