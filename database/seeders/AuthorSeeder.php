<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author = new Author();
        $author->name = 'J. K. Rowling';
        $author->save();

        $author = new Author();
        $author->name = 'Roald Dahl';
        $author->save();

        $author = new Author();
        $author->name = 'Julia Donaldson';
        $author->save();

        $author = new Author();
        $author->name = 'Stephen King';
        $author->save();

        $author = new Author();
        $author->name = 'David Walliams';
        $author->save();

        $author = new Author();
        $author->name = 'Dr. Seuss';
        $author->save();
    }
}
