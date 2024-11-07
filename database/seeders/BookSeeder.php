<?php



namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Category;

class BookSeeder extends Seeder
{
    public function run()
    {
        // Membuat buku baru
       Book::create([
            'title' => 'Naruto',
            'author' => 'Masashi Kishimoto',
            'year' => 1999,
            'publisher' => 'bandai',
            'city' => 'Japanese',
            'cover' => 'naruto.jpg',
            'bookshelves_id' => 1,
        ]);

 
    }
}


