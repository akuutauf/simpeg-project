<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Employee::insert([
            [
                'employee_type_id' => 2,
                'nip' => '0878952136458',
                'nidn' => '2558745896332',
                'name' => 'Irfan Efendi',
                'gender' => 'L',
                'phone' => '0852534623423',
                'email' => 'irfan@poliwangi.ac.id',
                'birthplace' => 'Banyuwangi',
                'birthdate' => '1999-08-19',
                'religion' => 'Islam',
                'address' => 'Rogojampi, Banyuwangi',
                'city' => 'Banyuwangi',
                'district' => 'Rogojampi',
                'province' => 'Jawa Timur',
                'nationality' => 'ID',
                'postal_code' => '0673',
                'back_degree' => 'S.Kom.,M.Kom',
                'front_degree' => null,
            ]
        ]);
    }
}
