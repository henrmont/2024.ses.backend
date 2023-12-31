<?php

namespace Database\Seeders;

use App\Models\Link;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('links')->insert(
            [
                [
                    'name'      => 'Dashboard',
                    'icon'      => 'dashboard',
                    'url'       => '/dashboard',
                    'created_at'=> now(),
                    'updated_at'=> now()
                ],
                [
                    'name'      => 'Configurações',
                    'icon'      => 'tune',
                    'url'       => '/configuracoes',
                    'created_at'=> now(),
                    'updated_at'=> now()
                ]
            ]
        );
    }
}
