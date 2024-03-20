<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categories::query()->insert(
            [
                [
                    "id" => 1,
                    "name" => "Psychology",

                ],
                [
                    "id" => 2,
                    "name" => "Computer",
                ],
                [
                    "id" => 3,
                    "name" => "Biography",
                    
                ],
                [
                    "id" => 4,
                    "name" => "Astronomy",
                   
                ]
                
            ]
        );
    }
}
