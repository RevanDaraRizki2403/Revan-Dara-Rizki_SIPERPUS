<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bookshelf;

class BookshelfSeeder extends Seeder
{
    public function run()
    {
        Bookshelf::create(['code' => 'A1', 'name' => 'Malam Pertama dialam kubur']);
        Bookshelf::create(['code' => 'B2', 'name' => 'kisah 25 nabi dan rosul']);
    }
}