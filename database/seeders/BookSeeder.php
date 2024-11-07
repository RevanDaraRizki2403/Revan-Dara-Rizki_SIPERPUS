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
            'title' => 'Perpus',
            'author' => 'Tere Liye',
            'year' => 1999,
            'publisher' => 'Cahaya Abadi',
            'city' => 'Jamaras',
            'cover' => 'Pidi',
            'bookshelves_id' => 1,
        ]);

 
    }
}


