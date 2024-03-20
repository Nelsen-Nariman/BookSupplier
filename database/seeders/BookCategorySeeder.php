<?php

namespace Database\Seeders;

use App\Models\BookCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_category')->insert(
            [
                // Disini mesti pake BookCategoryMigration dan seedernya karena relasi category ke buku di soal ini itu many to many.
                // Jadi satu buku bisa banyak kategori, satu kategori bisa banyak buku. Makanya perlu satu migration tambahan buat jembatannya.
                // Tapi kalau kayak yg di project lab (Barbatos) dia bisa langsung soalnya kategorinya itu cmn bisa satu setiap buku, jadi one to many.
                [
                    "id" => 1,
                    "book_id" => 1,
                    "category_id"=>1,

                ],
                [
                    "id" => 2,
                    "book_id" => 2,
                    "category_id"=>1,
                ],
                [
                    "id" => 3,
                    "book_id" => 3,
                    "category_id"=>1,
                    
                ],
                [
                    "id" => 4,
                    "book_id" => 4,
                    "category_id"=>1,
                   
                ],

                [
                    "id" => 5,
                    "book_id" => 4,
                    "category_id"=>2,
                   
                ],

                [
                    "id" => 6,
                    "book_id" => 5,
                    "category_id"=>2,
                   
                ],

                [
                    "id" => 7,
                    "book_id" => 5,
                    "category_id"=>3,
                   
                ],

                [
                    "id" => 8,
                    "book_id" => 6,
                    "category_id"=>2,
                   
                ],

                [
                    "id" => 9,
                    "book_id" => 6,
                    "category_id"=>3,
                   
                ],

                [
                    "id" => 10,
                    "book_id" => 7,
                    "category_id"=>2,
                   
                ],

                [
                    "id" => 11,
                    "book_id" => 7,
                    "category_id"=>3,
                   
                ],

                [
                    "id" => 12,
                    "book_id" => 8,
                    "category_id"=>3,
                   
                ],

                [
                    "id" => 13,
                    "book_id" => 8,
                    "category_id"=>4,
                   
                ],

                [
                    "id" => 14,
                    "book_id" => 9,
                    "category_id"=>4,
                   
                ],
                [
                    "id" => 15,
                    "book_id" => 10,
                    "category_id"=>4,
                   
                ],
                [
                    "id" => 16,
                    "book_id" => 11,
                    "category_id"=>4,
                   
                ],

                
            ]
        );
    }
}
