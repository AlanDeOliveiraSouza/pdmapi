<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        /*
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        */
        Produto::create(['nome'=>'Produto1', 'preco'=>10.1]);
        Produto::create(['nome'=>'Produto2', 'preco'=>20.2]);
        Produto::create(['nome'=>'Produto3', 'preco'=>30.3]);
    }
}
