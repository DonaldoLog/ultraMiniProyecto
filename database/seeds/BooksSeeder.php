<?php

use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
          ['nombre'=>'libro2','autor'=>'Autor2'],
          ['nombre'=>'libro3','autor'=>'Autor3'],
          ['nombre'=>'libro4','autor'=>'Autor4']
        ]);
    }
}
