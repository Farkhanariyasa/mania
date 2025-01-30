<?php

namespace Database\Seeders;

use App\Models\Aset;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            AsetSeeder::class,
        ]);


        User::create([
            'name' => 'Admin',
            'email' => 'test@mail.com',
            'password' => '$2y$12$9R8mv36oGLYKYU89G3WmqeZRLpBgFvUJXnmfVhr9NZdT3G.aUeq1K',
        ]);


        $this->call([
            DashboardTableSeeder::class,
        ]);
    }
}
