<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        /**Poblando los datos de la tabla  categoria */

        /*DB::table('categoria')->insert([
            ['id_categoria'=> 1,'nombre'=>'Medicamentos'],
            ['id_categoria'=> 2,'nombre'=>'Ropa'],
            ['id_categoria'=> 3,'nombre'=>'Alimentos'],
            ['id_categoria'=> 4,'nombre'=>'Juguetes']
        ]);*/
        //\App\Models\Mascota::factory(10)->create();
        \App\Models\Proveedor::factory(10)->create();
        
    }
}
