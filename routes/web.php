<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// HOME
Route::get('/', function () {
    return view('home');
});

// PROFILE ROUTES
Route::get('/profiles/ariel-sefrian', function () {
    return view('profiles/ariel-sefrian');
});

Route::get('/profiles/devin-augustin', function () {
    return view('profiles/devin-augustin');
});

Route::get('/profiles/rico-tokanto', function () {
    return view('profiles/rico-tokanto');
});



// SOFTSKILL ROUTES
Route::get('/softskill/rico', function () {
    $detail_softskill = [
        [
            "title" => "Sampah Plastik di Laut Indonesia",
            "slug" => "sampah-plastik-di-laut-indonesia",
            "body" => "Indonesia merupakan sebuah Negara maritim yang artinya sebagian besar wilayahnya adalah perairan. Indonesia memiliki wilayah perairan umum seluas 54 juta hektar lebih (540 ribu 〖km〗^2) dan tercatat sebagai perairan umum terluas di Asia setelah China. Sebagai negara kepulauan, Indonesia membutuhkan upaya yang sangat luar biasa untuk memantau wilayah lautnya. Salah satu yang paling penting adalah menjaga perairan itu bebas dari sampah. Tentu kondisi ideal ini sangat sulit tercapai karena begitu besarnya aktivitas perairan, baik di laut lepas maupun di pelabuhan....[Klik judul untuk informasi lebih lanjut]"
            
        ],
        [
            "title" => "Perkembangan Youtube di Indonesia",
            "slug" => "perkembangan-youtube-di-indonesia",
            "body" => "Siapa yang tidak mengenal platform streaming online bernama Youtube, pastinya seluruh orang sudah mengenal dan tidak asing lagi dengan aplikasi yang bernama Youtube ini. Namun, tahukah Anda siapa yang menciptakan platform Youtube ini? Youtube dibuat oleh tiga mantan karyawan PayPal pada Februari 2005, situs web ini memungkinkan pengguna mengunggah, menonton, dan berbagi video. Perusahaan ini terletak di San Bruno, California, dan memakai teknologi Adobe Flash Video dan HTML5 untuk menampilkan berbagai macam konten video buatan pengguna / creator, termasuk klip film, klip TV, dan Video musik. Selain itu, konten amatir seperti blog video, video orisinal pendek, video Pendidikan juga ada dalam situs ini dan masih banyak berbagai video lainnya yang tersebar di Youtube....[Klik judul untuk informasi lebih lanjut] "
        ],
    ];

    return view('softskill/rico', [
        "title" => "Posts",
        "Detail" => $detail_softskill

    ]);
});

Route::get('/softskill/ariel', function () {
    $detail_softskill = [
        [
            "title" => "Pendidikan di Indonesia",
            "slug" => "pendidikan-di-indonesia",
            "body" => "Pendidikan mengambil peran yg amat penting bagi anak – anak, remaja, orang dewasa bahkan lansia. Namun, apakah kamu tahu apa arti dari pendidikan itu sendiri? Berdasarkan undang – undang RI Nomor 20 tahun 2003 tentang Sistem Pendidikan Nasional (Sisdiknas), pasal 1 (1 dan 4), yaitu Pendidikan adalah usaha sadar dan terencana untuk mewujudkan suasana belajar dan proses pembelajaran agar peserta didik secara aktif mengembangkan potensi dirinya untuk memiliki kekuatan spiritual keagamaan, pengendalian diri, kepribadian, kecerdasan, akhlak mulia, serta keterampilan yang diperlukan dirinya, masyarakat, bangsa dan Negara....[Klik judul untuk informasi lebih lanjut]"
            
        ],
        [
            "title" => "Media Sosial",
            "slug" => "media-sosial",
            "body" => "Perkembangan teknologi informasi membawa dampak yang sangat besar dalam kehidupan masyarakat seluruh dunia. Lahirnya media social merupakan salah satu contoh nyata yang dapat kita lihat akibat perkembangan teknologi informasi itu sendiri. Kehidupan manusia pada saat ini tidak dapat dipisahkan lagi dari media social, hal ini dikarenakan media social memegang peranan yang sangat penting di dalam setiap aspek kehidupan manusia....[Klik judul untuk informasi lebih lanjut]"
        ],
    ];
    return view('softskill/ariel', [
        "title" => "Posts",
        "Detail" => $detail_softskill

    ]);
});

Route::get('/softskill/devin', function () {
    $detail_softskill = [
        [
            "title" => "Krisis Minyak Goreng di Indonesia",
            "slug" => "krisis-minyak-goreng-di-indonesia",
            "body" => "Tentunya kita semua tau definisi serta kegunaan dari minyak goreng namun, beberapa bulan belakangan ini tepatnya dimulai pada Februari 2022 sedang terjadi keributan akan langkanya minyak goreng yang katanya tidak tersedia di kebanyakan toko ritel, supermarket, serta pasar tradisional. Memang hal ini dapat dipastikan dengan banyaknya berita yang beredar serta diliput di beberapa stasiun TV yang ada. Mereka semua menyatakan bahwa Indonesia sedang mengalami krisis kebutuhan minyak goreng. Disini Saya akan membahas kenapa minyak goreng menjadi langka....[Klik judul untuk informasi lebih lanjut]"
            
        ],
        [
            "title" => "Kesenjangan Sosial di Indonesia",
            "slug" => "kesenjangan-sosial-di-indonesia",
            "body" => "Kesenjangan social merupakan fenomena yang sudah tidak asing lagi untuk dilihat, apalagi di Negara Indonesia. Banyak berita di luar sana yang meliput tentang kesenjangan social di Indonesia, dan juga sering sekali mereka memperlihatkan bagaimana kehidupan orang yang berkecukupan “kaya” dengan kehidupan orang yang kurang beruntung “miskin”. Dapat kita lihat juga secara langsung bahwa kehidupan kedua kasta ini sangat berbanding terbalik 180 derajat....[Klik judul untuk informasi lebih lanjut]"
        ],
    ];
    return view('softskill/devin', [
        "title" => "Posts",
        "Detail" => $detail_softskill

    ]);
});

// Halaman Single Post
Route::get('softskill/rico/{slug}', function($slug){
    $detail_softskill = [
        [
            "title" => "Sampah Plastik di Laut Indonsia",
            "slug" => "sampah-plastik-di-laut-indonesia",
            "body" => "Indonesia merupakan sebuah Negara maritim yang artinya sebagian besar wilayahnya adalah perairan. Indonesia memiliki wilayah perairan umum seluas 54 juta hektar lebih (540 ribu 〖km〗^2) dan tercatat sebagai perairan umum terluas di Asia setelah China. Sebagai negara kepulauan, Indonesia membutuhkan upaya yang sangat luar biasa untuk memantau wilayah lautnya. Salah satu yang paling penting adalah menjaga perairan itu bebas dari sampah. Tentu kondisi ideal ini sangat sulit tercapai karena begitu besarnya aktivitas perairan, baik di laut lepas maupun di pelabuhan.
            Kementerian Lingkungan Hidup dan Kehutanan (KLHK) mencatat sepanjang tahun 2018 sampah plastik di laut Indonesia mencapai 615.674,63 ton. Kemudian turun menjadi 566.074,94 ton pada 2019. Dan pada 2020 terdapat sekitar 521.275,06 ton sampah plastik yang berada di laut Indonesia. Jumlah ini menurun sebanyak 15,3% dari dua tahun sebelumnya. Angka yang sangat tinggi ini Kebanyakan berasal dari kebocoran sampah daratan ke perairan dan kebocoran sampah dari aktivitas di lautan.
            Sembilan dari 10 jenis sampah yang tersebar di lautan kebanyakan berasal dari bahan plastik, seperti sedotan, pengaduk, alat makan plastik, botol minum plastik, gelas plastik, kaleng minuman, tusuk lidi, lembaran plastik, tas, dan kemasan lainnya. 
            Dengan melihat betapa fantastisnya jumlah sampah yang di hasilkan Indonesia, hal ini menjadikan Indonesia sebagai negara dengan peringkat kedua sebagai penyumbang sampah plastik ke laut di dunia atau berada satu posisi di bawah China sebagai negara peringkat pertama penyumbang sampah plastik ke laut terbanyak di dunia. Grup Penelitian Jambeck mengeluarkan hasil riset mereka soal fakta sampah plastik di laut dalam Jurnal berjudul Plastic Waste Inputs from Land into The Ocean. Data tersebut mengesehkan posisi Indonesia berada di nomor dua sebagai penyumbang sampah plastik ke lautan di dunia."
            
        ],
        [
            "title" => "Perkembangan Youtube di Indonesia",
            "slug" => "perkembangan-youtube-di-indonesia",
            "body" => "Siapa yang tidak mengenal platform streaming online bernama Youtube, pastinya seluruh orang sudah mengenal dan tidak asing lagi dengan aplikasi yang bernama Youtube ini. Namun, tahukah Anda siapa yang menciptakan platform Youtube ini? Youtube dibuat oleh tiga mantan karyawan PayPal pada Februari 2005, situs web ini memungkinkan pengguna mengunggah, menonton, dan berbagi video. Perusahaan ini terletak di San Bruno, California, dan memakai teknologi Adobe Flash Video dan HTML5 untuk menampilkan berbagai macam konten video buatan pengguna / creator, termasuk klip film, klip TV, dan Video musik. Selain itu, konten amatir seperti blog video, video orisinal pendek, video Pendidikan juga ada dalam situs ini dan masih banyak berbagai video lainnya yang tersebar di Youtube. Namun, pada November 2006, Youtube, LLC dibeli oleh Google dengan nilai US$1,65 miliar dan resmi beroperasi sebagai anak perusahaan Google. 

            Youtube sendiri sudah sangat berkembang di seluruh dunia, khusunya di Indonesia beberapa tahun belakangan ini. Hal ini dapat dibuktikan dengan adanya data dari ComScore (Lembaga resmi perusahaan analitik pengukuran pengunjung situs di Indonesia yang berasal dari Amerika) yang menunjukkan, ada lebih dari 93 juta penonton unik di Indonesia (berusia di atas 18 tahun) yang menonton video di Youtube setiap bulannya selama tahun 2020. Jumlah ini tercatat meningkat hingga 10 juta dibandingkan dengan tahun sebelumnya. Dan jumlah jam konten yang diunggah dari Indonesia bertambah lebih dari 2 kali lipat dari tahun ke tahun. Berdasarkan hasil studi, 94% pengguna Indonesia mengatakan bahwa Youtube merupakan tujuan awal mereka pada saat mencari konten video. Grafik di bawah ini merupakan data yang telah dikumpulkan di Negara Indonesia dengan memperhatikan penggunaan Internet pada tahun 2020.
            Pertumbuhan penonton Youtube itu juga tak lepas dari kontribusi para kreator di Indonesia, dimana sejumlah kreator berhasil meraih jutaan subscriber. Bahkan kini tercatat 600 channel di Indonesia yang memiliki satu juta subscriber. Jika dibandingkan dengan tahun 2019, dimana terdapat 2 YouTuber Indonesia yang mendapatkan diamond button creators yaitu Atta Halilintar dan Ria Ricis. Sedangkan di tahun 2020, sudah lebih dari delapan kreator, terdiri dari individual creators dan beberapa channel TV lokal yang mendapatkan penghargaan ini. Hal ini menunjukkan betapa pesatnya perkembangan Youtube di Indonesia dalam kurun waktu 1 tahun.

            Dengan banyaknya jumlah creator Youtube di Indonesia, hal ini meningkatkan berbagai kreatifitas yang dimiliki oleh para Youtuber, mereka dapat membuat berbagai jenis konten yang menarik perhatian / minat para penonton Youtube seperti konten gaming (Jess No Limit), konten edukasi (Nihongo Mantappu), konten tutorial make up (Sarah Ayu), konten music (RIG RIG RIG Gear Demo), dan masih banyak puluhan konten menarik lainnya. Konten – konten seperti ini sangatlah popular di berbagai kalangan masyarakat Indonesia, sehingga hal ini dapat menarik minat para remaja untuk menjadi Youtuber, karena para Youtuber juga memiliki penghasilan yang cukup besar sesuai dengan jumlah subscriber yang mereka miliki.

            Namun, masih ada juga beberapa pihak yang menyalahgunakan platform Youtube ini, ada juga beberapa orang yang dengan sengaja mengupload video kekerasan, film dewasa, dan berbagai video negatif lainnnya di Youtube. Oleh karena itu, kita sebagai masyarakat maupun orang tua harus menjaga anak – anak agar terhindar dari melihat video kekerasan tersebut. Kita harus memilih konten / chanel apa saja yang boleh dilihat oleh anak – anak, membatasi usia penonton, sehingga video yang muncul akan sesuai dengan asupan penontonnya."
        ],
    ];

    $new_post = [];
    foreach($detail_softskill as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('softskill/post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});

Route::get('softskill/ariel/{slug}', function($slug){
    $detail_softskill = [
        [
            "title" => "Pendidikan di Indonesia",
            "slug" => "pendidikan-di-indonesia",
            "body" => "Pendidikan mengambil peran yg amat penting bagi anak – anak, remaja, orang dewasa bahkan lansia. Namun, apakah kamu tahu apa arti dari pendidikan itu sendiri? Berdasarkan undang – undang RI Nomor 20 tahun 2003 tentang Sistem Pendidikan Nasional (Sisdiknas), pasal 1 (1 dan 4), yaitu “Pendidikan adalah usaha sadar dan terencana untuk mewujudkan suasana belajar dan proses pembelajaran agar peserta didik secara aktif mengembangkan potensi dirinya untuk memiliki kekuatan spiritual keagamaan, pengendalian diri, kepribadian, kecerdasan, akhlak mulia, serta keterampilan yang diperlukan dirinya, masyarakat, bangsa dan Negara.” 
            Etimologi kata pendidikan itu sendiri berasal dari bahasa latin yaitu ducare, berarti “menuntun, mengarahkan, atau memimpin” dan awalan e yang berarti “keluar”. Jadi, pendidikan berarti kegiatan “menuntun ke luar”. Pastinya setiap dari kita telah mendapatkan pendidikan setidaknya sekali dalam seumur hidup ada yg mendapatkan pendidikan sampai SD, SMP, SMA maupun sampai Universitas. Namun, pernahkah kamu berpikir bahwa pendidikan yang telah kita terima sudah bermutu atau tidak?
            Nah, sebelum kita membahas lebih jauh pertama – tama mari kita bahas apa itu pendidikan bermutu? Menurut Hari Sudradjad pendidikan yang bermutu adalah pendidikan yang mampu menghasilkan lulusan yang memiliki kemampuan atau kompotensi, baik kompetensi akademik maupun kompetensi kejuruan, yang dilandasi oleh kompetensi personal dan social, serta nilai – nilai akhlak mulia, yang keseluruhannya merupakan kecakapan hidup (Life skill), menghasilkan manusia yang berkualitas, atau manusia dengan pribadi yang baik, maksudnya manusia yang mampu mengintegralkan iman, ilmu, dan amal.
            Pendidikan di Indonesia bisa dibilang jauh dari kata “bermutu” hal ini dapat kita lihat dari kualitas Sumber Daya Manusia di Negara Indonesia yang dikategorikan cukup rendah dan rendahnya kualitas SDM ini secara langsung disebabkan oleh rendahnya kualitas pendidikan di Indonesia. Hal ini bisa kita lihat berdasarkan riset dari Bank Dunia tahun 2018, indeks Sumber Daya Manusia Indonesia berada pada peringkat 87 dari 157 negara di dunia. Nilai HCI (Human Capital Index) Indonesia sebesar 0,53% tertinggal dari beberapa Negara Asia Tenggara. HCI ini sendiri pada dasarnya adalah ukuran bagaimana kondisi pengetahuan, keterampilan, dan kesehatan untuk dapat mendukung produktivitas SDM.
            Sementara untuk kualitas pendidikan di Indonesia sendiri sebenarnya cukup memprihatinkan. Hal ini dapat dibuktikan dengan data UNESCO (2000), tentang peringkat indeks Pengembangan Manusia (Human Development Index), yaitu komposisi dari peringkat pencapaian pendidikan, kesehatan, dan penghasilan per kepala. Data tersebut menunjukkan bahwa indeks pengembangan manusia Indonesia makin menurun. Di antara 174 negara di dunia, Indonesia menempati urutan ke – 102 (1996), ke-99 (1997), ke-105 (1998) dan ke-109 (1999). Menurut survey Political and Economic Risk Consultant (PERC), kualitas pendidikan di Indonesia berada di urutan ke-12 dari 12 negara di Asia. Data yang dilaporkan oleh The World Economic Forum Swedia (2000), Indonesia memiliki daya saing yang rendah, yaitu hanya urutan ke-37 dari 57 negara yang disurvei di dunia. Dari data tersebut, dapat dikatakan bahwa tingkat pendidikan di Indonesia masih terancam.
            Oleh karena itu, pemerintah Indonesia harus berusaha untuk meningkatkan kualitas pendidikan di Indonesia cara yang pertama yaitu dengan memperbaiki kualitas para pengajar (guru) karena lemahnya para pendidik dalam menggali potensi murid, pengajar seharusnya tidak berorientasi kepada nilai melainkan harus mengutamakan kedisiplinan, usaha, dan kejujuran dari siswa tersebut. Kedua adalah system pendidikan yang kurang baik dalam waktu pembelajarannya. Jam belajar di sekolah Indonesia kelamaan, sehinnga siswa sulit mengembangkan minat dan bakat yang mereka miliki melalui kegiatan ekstrakurikuler dan organisasi. Ketiga, biaya pendidikan yang mahal sehingga menyebabkan pendidikan tidak dapat tersebar dengan merata dan mengakibatkan sarana pembelajaran menjadi kurang.
            Diharapkan pemerintah Indonesia dapat meningkatkan kualitas pendidikan di Indonesia dengan cara meningkatkan kualitas guru di Indonesia dengan cara melakukan ujian kepada para guru, sehinnga didapatkan pengajar yang berkompeten. Kedua mengurangi jam belajar siswa, namun di back-up dengan memperbanyak kegiatan organisasi dan ekstrakurikuler. Terakhir perlu adanya kebijakan dari Negara mengenai biaya pendidikan di Indonesia."
            
        ],
        [
            "title" => "Media Sosial",
            "slug" => "media-sosial",
            "body" => "Perkembangan teknologi informasi membawa dampak yang sangat besar dalam kehidupan masyarakat seluruh dunia. Lahirnya media social merupakan salah satu contoh nyata yang dapat kita lihat akibat perkembangan teknologi informasi itu sendiri. Kehidupan manusia pada saat ini tidak dapat dipisahkan lagi dari media social, hal ini dikarenakan media social memegang peranan yang sangat penting di dalam setiap aspek kehidupan manusia. 
            Table Histogram di atas menunjukkan bahwa jumlah pengguna aktif media social di Indonesia mencapai 191 juta orang pada Januari 2022. Jumlah ini naik sebesar 12,35% dibandingkan pada tahun 2021.
            Kehadiran media social di tengah masyarakat era kini sangat diterima dengan baik serta memberikan dampak positif bagi penggunanya. Hal ini dikarenakan pengguna media social mendapatkan beberapa keuntungan yang sangat berguna untuk memenuhi kehidupan sehari – hari seperti mudahnya kegiatan komunikasi, mudahnya dalam mencari informasi, tempat mencari hiburan untuk mengisi waktu luang, berjualan secara online, mudahnya dalam berbagi informasi serta bebasnya menyebarkan kreativitas dan aspirasi yang ingin kita tuangkan. Semua hal ini bisa dilakukan jika kita memiliki social media. 
            Namun, perlu diketahui bahwa perkembangan media social ini bagaikan pisau bermata dua. Selain berfungsi sebagai sumber informasi dan komunikasi, ternyata perkembangan media social ini memberikan beberapa dampak negative yang berbahaya jika disalahgunakan oleh pihak yang tidak bertanggungjawab. Hal ini dapat dibuktikan bahwa jumlah kejahatan siber yang terjadi di Indonesia meningkat pesat sejak Januari 2020. Bahkan, jumlah kejahatan siber yang terjadi sejak Januari hingga pertengahan Juni 2020 mencapai 2.259 kasus, sementara tingkat penyelesain masalah hanya sebanyak 527 kasus."
        ],
    ];

    $new_post = [];
    foreach($detail_softskill as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('softskill/post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});

Route::get('softskill/devin/{slug}', function($slug){
    $detail_softskill = [
        [
            "title" => "Krisis Minyak Goreng di Indonesia",
            "slug" => "krisis-minyak-goreng-di-indonesia",
            "body" => "Tentunya kita semua tau definisi serta kegunaan dari minyak goreng namun, beberapa bulan belakangan ini tepatnya dimulai pada Februari 2022 sedang terjadi keributan akan langkanya minyak goreng yang katanya tidak tersedia di kebanyakan toko ritel, supermarket, serta pasar tradisional. Memang hal ini dapat dipastikan dengan banyaknya berita yang beredar serta diliput di beberapa stasiun TV yang ada. Mereka semua menyatakan bahwa Indonesia sedang mengalami krisis kebutuhan minyak goreng. Disini Saya akan membahas kenapa minyak goreng menjadi langka.Nah, dapat dilihat pada grafik serta table yang terlampir. Table di atas menunjukkan bahwa selama periode tahun 2021 harga minyak goreng kemasan mulai menunjukkan angka yang meningkat terutama pada akhir tahun Desember 2021 yaitu sebesar Rp19.771/Liter harga tersebut naik 38,97% dibandingkan dengan harga pada akhir 2020 yang hanya berada pada harga Rp15.011/Liter namun, kenaikan harga minyak goreng ini seimbang / diiringi dengan kenaikan harga jual buah sawit per kg yang pada saat itu juga naik.
            Kenaikan harga minyak goreng ini menjadi tidak terkontrol pada tahun 2022. Harga minyak goreng kemasan pada bulan Januari 2022 mencapai angka yang cukup fantastis yaitu sebesar Rp20.488/Liter. Oleh karena itu Pemerintah melakukan revisi harga eceran tertinggi (HET) minyak goreng lantaran mahalnya harga minyak tersebut. Pemerintah pun turun tangan dengan mematok kebijakan satu harga atau bisa dikatakan subsidi yakni sebesar Rp14.000/Liter. Kebijakan ini diterapkan mulai tanggal 27 Januari 2022. HET minyak goreng meyebabkan harga turun dan berlaku mulai 1 Februari 2022. Berikut perincian HET minyak goreng mulai 1 Februari 2022:
            •	Harga minyak goreng curah sebesar Rp11.500/Liter.
            •	Harga minyak goreng kemasan sederhana sebesar Rp13.500/Liter.
            •	Harga minyak goreng kemasan premium sebesar Rp14.000/Liter.
            Namun, tahukah kamu setelah diterapkannya harga minyak goreng subsidi ini, ketersediaan minyak goreng di toko ritel, supermarket, pasar tradisional justru menjadi langka. Beberapa merek minyak goreng yang terkenal seperti Bimoli, Sunco, Fortune, dan lain – lain menjadi hilang dan sangat sulit untuk dicari selama diterapkannya HET ini. 
            Hal ini dikarenakan harga biji sawit yang menjadi bahan utama pembuatan minyak goreng tidak mengalami penurunan, justru melambung menjadi lebih tinggi yaitu sempat menyentuh Rp3.900/kg. Bayangkan jika harga biji sawit masih sangat mahal bagaimana caranya harga minyak goreng bisa begitu rendah. Oleh karena hal inilah kebanyakan pabrik tidak ingin memproduksi minyak goreng, hal inilah yang menyebabkan minyak goreng menjadi langka. Dikarenakan hal ini pemerintah kembali merevisi HET minyak goreng.
            Pada tanggal 16 Maret 2022 pemerintah tidak lagi membatasi harga minyak kemasan di toko ritel modern, dan melepas harganya sesuai dengan mekanisme pasar, yang harganya sebesar Rp25.000/Liter namun hal ini belum mengubah fakta bahwa minyak goreng masih belum tersedia.
            Saya berharap pemerintah dapat memberikan solusi yang terbaik terkait permasalahan krisis minyak goreng yang sedang terjadi di Indonesia ini. Karena banyak sekali warga di Indonesia yang memerlukan minyak goreng untuk kebutuhan sehari – hari mereka."
            
        ],
        [
            "title" => "Kesenjangan Sosial di Indonesia",
            "slug" => "kesenjangan-sosial-di-indonesia",
            "body" => "Kesenjangan social merupakan fenomena yang sudah tidak asing lagi untuk dilihat, apalagi di Negara Indonesia. Banyak berita di luar sana yang meliput tentang kesenjangan social di Indonesia, dan juga sering sekali mereka memperlihatkan bagaimana kehidupan orang yang berkecukupan “kaya” dengan kehidupan orang yang kurang beruntung “miskin”. Dapat kita lihat juga secara langsung bahwa kehidupan kedua kasta ini sangat berbanding terbalik 180 derajat.
            Namun, tahukah kamu apa itu kesenjangan social? Kesenjangan social sering juga disebut sebagai ketimpangan social karna ketidakseimbangan masyarakat sehingga terlihat perbedaan yang mencolok dari berbagai sisi. Bisa juga dikatikan dengan ketimpangan dalam segi kekayaan, pendapatan dan juga ekonomi. Hal ini dikarenakan kurangnya lapangan pekerjaan di Indonesia sehingga pada akhirnya banyak sekali tenaga kerja yang tidak terpakai “pengangguran” sehingga kemiskinan menjadi semakin meningkat.
            Perlu anda ketahui bahwa ada beberapa factor utama yang menjadi penyebab terjadinya kesenjangan social. Berikut ini adalah factor – factor utama terjadinya kesejangan social:
            1.	Perbedaan Sumber Daya Alam (SDA)
            Indonesia dikenal dengan wilayah yang luas dan memiliki sumber daya yang unik serta berbeda di setiap wilayahnya namun, hal inilah yang menjadi salah satu factor kesenjangan social dan ekonomi karena kekuatan Sumber Daya Alam yang ada di tiap daerah berbeda.
            2.	Kebijakan Pemerintah
            Keputusan yang diambil pemerintah juga sangat mempengaruhi kesenjangan social. Misalnya kesenjangan di bidang program transmigrasi, dimana masyarakat pendatang akan lebih cepat berkembang dibandingkan dengan pendatang.
            3.	Kondisi Demografis
            Setiap wilayah pastinya memiliki kondisi demografis yang berbeda hal ini dipengaruhi oleh produktivitas kerja setiap anggota masyarakat di daerahnya masing – masing. Dan masih banyak factor lainnya.
            Menurut BPS (Badan Pusat Statistika) angka kesenjangan social ini sudah dapat dikatakan menurun hal ini dapat dibuktikan dari:
            •	Persentase penduduk miskin pada September 2021 sebesar 9,71%, menurun 0,43% poin terhadap Maret 2021 dan menurun 0,48% poin terhadap September 2020. 
            •	Jumlah penduduk miskin pada September 2021 sebesar 26,50 juta orang, menurun 1,04 juta orang terhadap Maret 2021 dan menurun 1,05 juta orang terhadap September 2020.
            •	Persentase penduduk miskin perkotaan pada Maret 2021 sebesar 7,89 persen, turun menjadi 7,60 persen pada September 2021. Sementara persentase penduduk miskin perdesaan pada Maret 2021 sebesar 13,10 persen, turun menjadi 12,53 persen pada September 2021.
            •	Dibanding Maret 2021, jumlah penduduk miskin September 2021 perkotaan turun sebanyak 0,32 juta orang (dari 12,18 juta orang pada Maret 2021 menjadi 11,86 juta orang pada September 2021). Sementara itu, pada periode yang sama jumlah penduduk miskin perdesaan turun sebanyak 0,73 juta orang (dari 15,37 juta orang pada Maret 2021 menjadi 14,64 juta orang pada September 2021).
            •	Garis Kemiskinan pada September 2021 tercatat sebesar Rp486.168,-/kapita/bulan dengan komposisi Garis Kemiskinan Makanan sebesar Rp360.007,- (74,05 persen) dan Garis Kemiskinan Bukan Makanan sebesar Rp126.161,- (25,95 persen).
            •	Pada September 2021, secara rata-rata rumah tangga miskin di Indonesia memiliki 4,50 orang anggota rumah tangga. Dengan demikian, besarnya Garis Kemiskinan per rumah tangga miskin secara rata-rata adalah sebesar Rp2.187.756,-/rumah tangga miskin/bulan.
            Memang dapat dikatakan bahwa persentase penurunan kesenjangan sosisal belum signifikan tetapi hal ini dapat dikatakan bagus dan merupakan Langkah awal agar meratanya kualitas hidup setiap masyarakat. Oleh karena itu, pemerintah dan masyrakat harus berusaha memperbaiki dan lebih giat dalam memperbaiki kualitas hidup, dengan cara membuat/menyediakan lapangan pekerjaan dan berbagai cara lainnya."
        ],
    ];

    $new_post = [];
    foreach($detail_softskill as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('softskill/post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});