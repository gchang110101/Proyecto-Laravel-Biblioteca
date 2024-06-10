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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        \App\Models\User::factory()->create(
            [
            'name' => 'TestUser',
            'email' => 'duran@example.com',
            'password' => '12345gabriel'
            ]
        );

        \App\Models\Student::factory()->create(
            [
                'cif' => '12345678A',
                'name' => 'Test',
                'last_name' => 'User',
                'email' => 'test@gmail.com',
                'phone' => '22223333'
            ]
        );
        \App\Models\Student::factory()->create(
            [
                'cif' => '12345678B',
                'name' => 'Test2',
                'last_name' => 'User2',
                'email' => 'test2@gmail.com',
                'phone' => '44445555'
            ]
        );
        \App\Models\Student::factory()->create(
            [
                'cif' => '12345678C',
                'name' => 'Test3',
                'last_name' => 'User3',
                'email' => 'test3@gmail.com',
                'phone' => '66667777'
            ]
        );
        \App\Models\Student::factory()->create(
            [
                'cif' => '12345678D',
                'name' => 'Test4',
                'last_name' => 'User4',
                'email' => 'test4@gmail.com',
                'phone' => '99998888'
            ]
        );
    }
}
