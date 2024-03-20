<?php

namespace Database\Seeders;

use App\Models\Publishers;
use Illuminate\Database\Seeder;

class PublishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Publishers::query()->insert(
            [
                [
                    "id" => 1,
                    "name" => "Gramedia",
                    "address" => "Jalan Teratai Baru No. 23, Jakarta Barat",
                    "phone" => "0834409251",
                    "email" => "Gramedia@gmail.com",
                    "image" => "https://cdnwpedutorenews.gramedia.net/wp-content/uploads/2022/02/02083934/Gramedia-World-Karawang.png"
                ],
                [
                    "id" => 2,
                    "name" => "Grasindo",
                    "address" => "Jalan Talokan Baru No. 14, Jakarta Selatan",
                    "phone" => "0834414261",
                    "email" => "Grasindo@gmail.com",
                    "image" => "https://www.gramedia.com/blog/content/images/2017/09/Logo-Baru-Grasindo-2-1.jpg"
                ],
                [
                    "id" => 3,
                    "name" => "Bintang Media",
                    "address" => "Jalan Bebek Angsa No. 8, Jakarta Utara",
                    "phone" => "081898206195",
                    "email" => "BintangMedia@gmail.com",
                    "image" => "https://id.joblum.com/uploads/24/23497.jpg"
                ],
                [
                    "id" => 4,
                    "name" => "Erlangga",
                    "address" => "Jalan Fifa No. 27, Jakarta Pusat",
                    "phone" => "082061242998",
                    "email" => "Erlangga@gmail.com",
                    "image" => "http://emir.co.id/wp-content/uploads/2016/11/logo-erlangga-png.png"
                ]
                
            ]
        );
    }
}
