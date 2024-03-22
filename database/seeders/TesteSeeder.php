<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teste;

class TesteSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teste::create([
            'nome' => 'Állyson Philipe', 
            'cpf' => '0000000000',
            'peso' => 999.999,
            'data_nascimento' => '1996-06-11'
        ]);
    }
}