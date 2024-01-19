<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if(\App\Models\User::count() === 0){
            \App\Models\User::factory()->create([
                'name' => 'Test User',
                'email' => 'test@filamentphp.com',
            ]);
        }
        
        if(\App\Models\Car::count() === 0){
            $car = \App\Models\Car::create([
                'name' => 'test car',
            ]);
            
            $car->parts()->create([
                'name' => 'test part',
                'description' => 'this text *should* be visible',
            ]);
        }
    }
}
