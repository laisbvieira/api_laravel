<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employees;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
        $employees = [
            [
                'nome' => 'Fernanda',
                'sobrenome' => 'Dantas',
                'idade' => 28,
                'sexo' => 'feminino',
            ],
            [
                'nome' => 'José',
                'sobrenome' => 'Ferreira',
                'idade' => 35,
                'sexo' => 'masculino',
            ],
            [
                'nome' => 'Monique',
                'sobrenome' => 'Félix',
                'idade' => 23,
                'sexo' => 'feminino',
            ],

        ];


        foreach ($employees as $employee) {
            Employees::create($employee);
        }
    }
}
