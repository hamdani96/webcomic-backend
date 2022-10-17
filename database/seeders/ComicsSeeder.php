<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Seeder;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comic::create([
            'user_id'       => 3,
            'category_id'      => 2,
            'banner'        => 'https://cdn.kena-blok.xyz/uploads/2022/10/Komik-Bad-Prosecutor-Sword-Showdown.jpg',
            'title'         => 'The Sword Man',
            'description'   => 'Sword Showdown yang dibuat oleh komikus bernama Kim Jun Hyeong ini bercerita tentang [Karya ini adalah adaptasi dari sebuah drama] Bagaimana Anda bisa melawan hukum ketika hukum ada di pihak Anda? “Jin Jung”, itu dilarang di dunia penuntutan untuk berperilaku seperti preman! Untuk menangkap orang-orang jahat, dia memilih cara yang bijaksana di atas hukum, trik di atas prosedur standar, dan kenakalan di atas kejujuran! Dia hanya punya satu tujuan! Untuk mengungkapkan kebenaran dan menjatuhkan kejahatan besar masyarakat! Ini adalah pertarungan antara Jaksa Penuntut “Jin Jung” dan menghukum orang-orang berkuasa yang korup yang seharusnya berada di sisi keadilan!',
            'status'        => 'free',
            'created_by'    => 3
        ]);

        Comic::create([
            'user_id'       => 3,
            'category_id'      => 1,
            'banner'        => 'https://cdn.kena-blok.xyz/uploads/2022/03/Komik-Please-Cure-My-Illness.jpg',
            'title'         => 'Heal My Sickness',
            'description'   => 'Manhua Please Cure My Illness yang dibuat oleh komikus bernama 温泉兔锅 ini bercerita tentang Yu Zitian, seorang mahasiswa dan arranger musik ditanyai oleh pihak lain karena tidak emosional dan tidak mampu menulis lagu cinta. Sebagai seseorang yang telah lajang sejak lahir dan tidak tertarik untuk jatuh cinta, Yu Zitian memutuskan untuk mengirim teman sekamarnya dan seorang junior untuk mengetahui seperti apa rasanya cinta! Dengan bantuan Yu Zitian yang tidak dapat diandalkan, bagaimana chemistry akan tumbuh di antara pasangan ini?',
            'status'        => 'free',
            'created_by'    => 3
        ]);

        Comic::create([
            'user_id'       => 3,
            'category_id'      => 3,
            'banner'        => 'https://cdn.kena-blok.xyz/uploads/2021/05/Komik-Memoir-Of-The-King-Of-War.jpg',
            'title'         => 'Memoir Of The King Of War',
            'description'   => 'Manhwa Memoir Of The King Of War yang dibuat oleh komikus bernama 우각 ini bercerita tentang Bernapas tidak menjamin semua orang hidup! Dan Sa Yu, keturunan Goryeo, menegur Distrik Pusat demi temannya yang paling dia hargai. Dia memerintah setiap pertempuran! Tidak ada yang bisa menghentikannya! Angkatan Bersenjata Cheonpo. Seni bela diri terhebat di Goryeo! Legenda Angkatan Bersenjata Cheonpo terus hidup saat sejarah Raja Perang terungkap!',
            'status'        => 'premium',
            'created_by'    => 3
        ]);

        Comic::create([
            'user_id'       => 3,
            'category_id'      => 1,
            'banner'        => 'https://cdn.kena-blok.xyz/uploads/2022/10/Komik-He-Cant-Be-This-Dumb.jpg',
            'title'         => 'He Can’t Be This Dumb',
            'description'   => 'Manhwa He Can’t Be This Dumb! yang dibuat oleh komikus bernama Han Ji-hye (한지혜) ini bercerita tentang Terkenal karena eksklusivitasnya, hanya anak-anak elit Korea yang dapat menghadiri International Island High. Tetapi ketika Kang Doha, seorang gadis biasa dari keluarga biasa, diberi kesempatan beruntung untuk mendaftar, dia didorong ke dunia uang dan kekuasaan yang tidak dikenalnya. Meskipun mencoba untuk terbang di bawah radar, dia entah bagaimana berakhir di asrama yang sama dengan Rowoon, pria paling populer di sekolah! Dia tampaknya memiliki semuanya, tetapi ketika menyangkut perempuan, dia sama sekali tidak tahu apa-apa. Bisakah Doha mengajarinya cara memenangkan hati seorang gadis?',
            'status'        => 'free',
            'created_by'    => 3
        ]);

        Comic::create([
            'user_id'       => 3,
            'category_id'      => 3,
            'banner'        => 'https://cdn.kena-blok.xyz/uploads/2021/08/Komik-The-Worlds-Best-Engineer.jpeg',
            'title'         => 'The World’s Best Engineer',
            'description'   => 'Manhwa The World’s Best Engineer yang dibuat oleh komikus bernama ini bercerita tentang Kim Soo-Ho, seorang insinyur sipil, menjadi bangsawan dari sebuah novel. Tapi apa ini? Harta saya akan segera dihancurkan? Kemudian saya harus mendesain, membangun, dan menjual.',
            'status'        => 'premium',
            'created_by'    => 3
        ]);
    }
}
