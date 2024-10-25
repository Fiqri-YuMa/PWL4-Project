<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use app\Models\Bookshelf;
class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('bookshelves')->insert([
            [
                'code' => 'FQ_Smile',
                'name'=> 'Fiqri Yusup'
            ],
            [
                'code' => 'FQ_White',
                'name'=> 'FIYUMA'
            ],
            [
                'code' => 'FQ_Dark',
                'name'=> 'Just_fii'
            ],
            [
                'code' => 'RB-000001',
                'name'=> 'Fi-Robo'
            ],

        ]);
        Bookshelf::create([
            'code' => 'RB-XXXXX',
            'name' => 'Unknows'
        ]);
    }
}
