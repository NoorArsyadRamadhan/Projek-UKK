<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Perjalanan;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // User::create([
        //     'name'=>'Noor M. Arsyad',
        //     'email'=>'181103',
        //     'nik'=>'181103',
        // ]);
        Perjalanan::factory(20)->create();
    }
}
