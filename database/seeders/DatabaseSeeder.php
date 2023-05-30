<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'username' => 'Sadam Payoda',
            'password' => bcrypt('Sadam12345'),
            'jenis_kelamin' => 'laki-laki',
            'NoHp' => '0831390193'
        ]);

        User::create([
            'username' => 'example',
            'password' => bcrypt('example'),
            'jenis_kelamin' => 'laki-laki',
            'NoHp' => '0831390193'
        ]);
    }
}
