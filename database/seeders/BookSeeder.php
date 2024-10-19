<?php

namespace Database\Seeders;

use App\Models\Book;

use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'title' => 'Sample Book',
            'author' => 'Christian Doe',
            'isbn' => '1234567890',
            'published_date' => '2024-01-01',
            'genre' => 'Fiction'
        ]);
    }
}
