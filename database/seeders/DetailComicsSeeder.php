<?php

namespace Database\Seeders;

use App\Models\DetailComic;
use Illuminate\Database\Seeder;

class DetailComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DetailComic::create([
            'comic_id'  => 5,
            'image'     => 'https://cdn.kena-blok.xyz/uploads/2021/08/Komik-The-Worlds-Best-Engineer.jpeg',
            'title'     => 'PERJALANAN PERTAMA',
            'episode'   => 1,
            'status'    => 'free',
            'created_by'    => 3,
        ]);

        DetailComic::create([
            'comic_id'  => 5,
            'image'     => 'https://cdn.kena-blok.xyz/uploads/2021/08/Komik-The-Worlds-Best-Engineer.jpeg',
            'title'     => 'PEMBELAJARAN',
            'episode'   => 2,
            'status'    => 'premium',
            'created_by'    => 3,
        ]);

        DetailComic::create([
            'comic_id'  => 5,
            'image'     => 'https://cdn.kena-blok.xyz/uploads/2021/08/Komik-The-Worlds-Best-Engineer.jpeg',
            'title'     => 'KETENANGAN',
            'episode'   => 3,
            'status'    => 'premium',
            'created_by'    => 3,
        ]);

        // He Cant Be Dumb
        DetailComic::create([
            'comic_id'  => 4,
            'image'     => 'https://cdn.kena-blok.xyz/uploads/2022/10/Komik-He-Cant-Be-This-Dumb.jpg',
            'title'     => 'BERTEMU',
            'episode'   => 1,
            'status'    => 'free',
            'created_by'    => 3,
        ]);

        DetailComic::create([
            'comic_id'  => 4,
            'image'     => 'https://cdn.kena-blok.xyz/uploads/2022/10/Komik-He-Cant-Be-This-Dumb.jpg',
            'title'     => 'BENIH BARU',
            'episode'   => 1,
            'status'    => 'free',
            'created_by'    => 3,
        ]);

        // Memoir Of The King Of War
        DetailComic::create([
            'comic_id'  => 3,
            'image'     => 'https://cdn.kena-blok.xyz/uploads/2021/05/Komik-Memoir-Of-The-King-Of-War.jpg',
            'title'     => 'MEMULAI',
            'episode'   => 1,
            'status'    => 'free',
            'created_by'    => 3,
        ]);

        DetailComic::create([
            'comic_id'  => 3,
            'image'     => 'https://cdn.kena-blok.xyz/uploads/2021/05/Komik-Memoir-Of-The-King-Of-War.jpg',
            'title'     => 'PEMBANTAIAN',
            'episode'   => 2,
            'status'    => 'premium',
            'created_by'    => 3,
        ]);

        // Heal My Sickness
        DetailComic::create([
            'comic_id'  => 2,
            'image'     => 'https://cdn.kena-blok.xyz/uploads/2022/03/Komik-Please-Cure-My-Illness.jpg',
            'title'     => 'SIHIR',
            'episode'   => 1,
            'status'    => 'free',
            'created_by'    => 3,
        ]);

        // The Sword Man
        DetailComic::create([
            'comic_id'  => 1,
            'image'     => 'https://cdn.kena-blok.xyz/uploads/2022/10/Komik-Bad-Prosecutor-Sword-Showdown.jpg',
            'title'     => 'LATIHAN',
            'episode'   => 1,
            'status'    => 'free',
            'created_by'    => 3,
        ]);

        DetailComic::create([
            'comic_id'  => 1,
            'image'     => 'https://cdn.kena-blok.xyz/uploads/2022/10/Komik-Bad-Prosecutor-Sword-Showdown.jpg',
            'title'     => 'PERTEMPURAN',
            'episode'   => 2,
            'status'    => 'free',
            'created_by'    => 3,
        ]);
    }
}
