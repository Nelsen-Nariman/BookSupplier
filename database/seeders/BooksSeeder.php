<?php

namespace Database\Seeders;

use App\Models\Books;
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
        Books::query()->insert(
            [
                [
                    "id" => 1,
                    "publisher_id" => 3,
                    "title" => "Mindset",
                    "author" => "Meliodas",
                    "year" => 2018,
                    "synopsis" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    "image" => "https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1436227012i/40745.jpg"
                ],
                [
                    "id" => 2,
                    "publisher_id" => 2,
                    "title" => "The Healing Power Of Touch",
                    "author" => "Escanor",
                    "year" => 2019,
                    "synopsis" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    "image" => "https://m.media-amazon.com/images/I/41GwDRGNFrL._AC_SY780_.jpg"
                ],
                [
                    "id" => 3,
                    "publisher_id" => 1,
                    "title" => "Five AM Club",
                    "author" => "Ferryanto",
                    "year" => 2020,
                    "synopsis" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    "image" => "https://pimtar.id/filex/source/The%205%20am%20Club.jpg"
                ],

                [
                    "id" => 4,
                    "publisher_id" => 4,
                    "title" => "Psychology Computer Programming",
                    "author" => "Ferry Jansen",
                    "year" => 2020,
                    "synopsis" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    "image" => "https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1356139932l/1660754.jpg"
                ],

                [
                    "id" => 5,
                    "publisher_id" => 3,
                    "title" => "Bill Gates",
                    "author" => "George Graham",
                    "year" => 2019,
                    "synopsis" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    "image" => "https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1439210419l/26015422._SX318_.jpg"
                ],

                [
                    "id" => 6,
                    "publisher_id" => 2,
                    "title" => "Sundar Pinchai",
                    "author" => "Yosamu Hansama",
                    "year" => 2021,
                    "synopsis" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    "image" => "https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1561262516l/52971278._SX0_SY0_.jpg"
                ],

                [
                    "id" => 7,
                    "publisher_id" => 1,
                    "title" => "Steve Jobs",
                    "author" => "Koro Darmawan",
                    "year" => 2018,
                    "synopsis" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    "image" => "https://upload.wikimedia.org/wikipedia/id/thumb/e/e4/Steve_Jobs_by_Walter_Isaacson.jpg/220px-Steve_Jobs_by_Walter_Isaacson.jpg"
                ],

                [
                    "id" => 8,
                    "publisher_id" => 4,
                    "title" => "Neil Armstrong",
                    "author" => "Vincent Julia",
                    "year" => 2013,
                    "synopsis" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    "image" => "https://m.media-amazon.com/images/I/51W12qlIWeL._AC_SY780_.jpg"
                ],

                [
                    "id" => 9,
                    "publisher_id" => 1,
                    "title" => "The Book of Pluto",
                    "author" => "Burharudin Kamarun",
                    "year" => 2014,
                    "synopsis" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    "image" => "https://m.media-amazon.com/images/I/71I-XsxXZkL.jpg"
                ],
                [
                    "id" => 10,
                    "publisher_id" => 2,
                    "title" => "The Book of Neptune",
                    "author" => "Danjuma Groenveld",
                    "year" => 2020,
                    "synopsis" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    "image" => "https://m.media-amazon.com/images/I/716K+tiAoQL.jpg"
                ],
                [
                    "id" => 11,
                    "publisher_id" => 4,
                    "title" => "Little Comet",
                    "author" => "Tachibana Taki",
                    "year" => 2018,
                    "synopsis" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    "image" => "https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781801087223/nature-stories-little-comet-9781801087223_hr.jpg"
                ],
            ]
        );
    }
}
