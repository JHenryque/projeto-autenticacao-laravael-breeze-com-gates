<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'user_id' => 1,
                'title' => 'Primerio post do administrador',
                'content' => 'Primer post do administrador',
            ],
            [
                'user_id' => 2,
                'title' => 'Primerio post do Usuario',
                'content' => 'Olá mundo Usuario',
            ],
            [
                'user_id' => 3,
                'title' => 'Primerio post do Visitante',
                'content' => 'Olá mundo Visitante',
            ],
        ];
        DB::table('posts')->insert($posts);
    }
}
