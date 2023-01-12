@extends('layouts.frontapp', ['title' => 'Kurikulum Secondary School (SMP-SMA)'])

@section('content')
    <section class="header-page" style="background-image:url({{asset('assets/img/ais_6.jpg')}})">
        <div class="container">
            <h1 class="center-text fw-600 lt-2 mb-10">KURIKULUM SEKOLAH MENENGAH</h1>
        </div>
    </section>
    <section class="pages-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <p>Al Lathif Islamic International School mengadopsi program-pogram yang menerapkan proses pembelajaran standar internasional dan dapat menghasilkan pembelajaran yang terbaik. Sesuai dengan visi kami yaitu mengembangkan kecerdasan anak menuju Generasi Qur’ani yang berakhlak mulia dan berwawasan global untuk memenuhi peran mereka sebagai khalifah di muka bumi. Kami menggunakan tiga kurikulum yang dipadukan dalam satu sistem kurikulum yang lengkap dan sesuai dengan kebutuhan para murid, terdiri atas Kurikulum Cambridge, Kurikulum Tahfidz Qur’an dan Kurikulum Nasional.</p>
                </div>
                <div class="col-sm-3">
                    @include('front.component.program_menu')
                </div>
            </div>    
        </div>
    </section>
    <section>
        <div class="container">
            <div class='line-after mt-50'><h3><span class="text-lineafter fw-600">PENDIDIKAN ISLAM</span></h3><div>
            <div class="row mt-30">
                    <div class="col-sm-6">
                        <p>Pada tingkat sekolah menengah para murid akan belajar pendidikan secara umum melalui buku dan juga belajar secara bertahap dari kitab-kitab para ulama yang dibimbing oleh para ustadz dan syaikh. Adapun kitab-kitab yang akan dipelajari selama siswa belajar di SMP – SMA Al Lathif adalah: Ta’lim Muta’alim, Tuhfatul Athfal, Attibyan fii Adaabi Hamalatil Quran, Jurumiyah, Arbain, At-Taqrib, dan Aqidatul Awam, Tafsir Ibnu Katsir, Fathul Qorib, Riyadhus Shalihin, Alfiyyah, Fathul Bari.</p>
                        <p>Pendidikan Islam juga dilaksanakan melalui pembiasaan kehidupan Islami di sekolah dan dan amalan yaumiyah yang dikontrol melalui buku mutaba’ah.</p>
                    </div>
                    <div class="col-sm-6 primary-img-bg" style="background-image:url({{asset('assets/img/allathif_islamic_school_islamic_education.jpg')}})"></div>
                </div>
            </div>
    </section>
    <section>
        <div class="container">
            <div class='line-after mt-50'><h3><span class="text-lineafter fw-600">TAHFIDZ AL QUR'AN</span></h3><div>
            <div class="row mt-30">
                    <div class="col-sm-4 primary-img-bg" style="background-image:url({{asset('assets/img/al-lathif-student.jpg')}})"></div>
                    <div class="col-sm-8">
                        <p>Kegiatan Tahfidz Qur’an di AIS dilaksanakan setiap hari, yaitu pagi pukul 06.30 sampai shalat dhuha, selepas shalat dzuhur, dan selepas shalat ashar. Hal ini bertujuan untuk membiasakan anak terus dekat dengan Al Qur’an dan semakin mencintainya. Untuk muroja’ah malam dilaksanakan selepas shalat maghrib dan selepas shalat subuh dengan bimbingan orang tua (untuk yang pulang ke rumah) atau ustadz pembimbing (untuk yang mondok).</p>
                        <p>Untuk siswa yang baru masuk akan mempelajari dasar-dasar membaca Al Qur’an (makhorizul huruf dan tajwid) langsung bersama para syaikh dari Gaza, Palestina yang telah memiliki sanad Al Qur’an. Dengan ini diharapkan para murid dapat menghafalkan Al Qur’an dengan bacaan yang benar (fasih). Pada fase ini, siswa-siswi akan menghafal juz 30 dengan metode talaqqi. Guru akan membacakan ayat yang akan dihafal dengan makhraj dan tajwid yang benar, kemudia para murid menghafalnya.</p>
                        <p>Setelah para murid dapat membaca Al Qur’an dengan baik, metode yang digunakan adalah metode mutabaah, yaitu metode menghafal mandiri. Hasil dari menghafalnya akan diperiksa secara rutin oleh para ustadz/ustadzah.</p>
                        <h4 class="fw-600">Target Hafalan</h4>
                        <p>Para murid diharapkan dapat menyelesaikan hafalan Al Quran 30 juz pada kelas XI kemudian melanjutkan ke proses pengambilan sanad Al Quran 30 Juz.</p>
                        <h4 class="fw-600">Ujian dan Sanad Al Qur’an</h4>
                        <p>Para murid akan diuji hafalannya secara berkala untuk memastikan hafalan mereka tetap mutiqin. Para murid yang telah menyelesaikan hafalan sesuai target dan dinyatakan lulus dalam ujian dapat mengikuti ujian sanad Al Qur’an untuk mendapatkan sertifikat Sanad hafalan Al Qur’an.</p>
                    </div>
                </div>
            </div>
    </section>
    <section>
        <div class="container">
            <div class='line-after mt-50'><h3><span class="text-lineafter fw-600">INTERNASIONAL KURIKULUM</span></h3><div>
            <div class="row mt-30">
                    <div class="col-sm-8">
                        <h4 class="fw-600">Cambridge IGCSE</h4>
                        <p>Di Al Lathif Islamic School, Cambridge IGCSE ini diikuti oleh siswa dan siswi mulai kelas 7 (secondary 1) sampai kelas 9 (secondary 3).  Cambridge IGCSE memberikan studi yang luas dan seimbang di berbagai mata pelajaran, menggunakan pendekatan pembelajaran yang berpusat pada peserta didik dan berbasis inkuiri. Kurikulum ini mendorong para murid untuk terlibat secara aktif dalam pembelajaran dan membuat hubungan antar mata pelajaran yang mereka pelajari. Selain itu, kurikulum ini juga mengembangkan pengetahuan, pemahaman, dan keterampilan siswa dalam: penguasaan materi pelajaran,  menerapkan pengetahuan dan pemahaman dalam pemecahan masalah baru, penyelidikan ilmiah, fleksibilitas dan responsif terhadap perubahan, bekerja dan berkomunikasi dalam Bahasa Inggris, dan pemahaman budaya.</p>
                        <p>Al Lathif mengadopsi kurikulum IGCSE dalam tiga mata pelajaran, yaitu Matematika, Sains (Fisika, Kimia, dan Biologi), serta Bahasa Inggris. Saat kelas 9, para siswa akan mengikuti ujian sertifikasi Cambridge IGCSE untuk ketiga mata pelajaran tersebut. Sertifikat hasil ujian tersebut memiliki standar yang sama di seluruh dunia.</p>
                        <h4 class="fw-600">Cambridge AS & A Level </h4>
                        <p>Pada jenjang SMA (Kelas 10 - kelas 12), AIS menggunakan kurikulum Cambridge International AS & A Level. Seperti program IGCSE, pada kurikulum tingkat SMA ini juga AIS mengadopsi tiga mata pelajaran, yaitu Matematika, Sains (Fisika, Kimia, dan Biologi), serta Bahasa Inggris.  Cambridge International AS & A Level digunakan untuk mengembangkan pengetahuan, pemahaman, dan keterampilan peserta didik dalam: penguasaan materi pelajaran yang mendalam, berpikir mandiri, menerapkan pengetahuan dan pemahaman untuk situasi baru, menangani dan mengevaluasi berbagai jenis sumber informasi, berpikir logis dan menyajikan argumen yang teratur dan koheren, membuat penilaian, rekomendasi dan keputusan, menyajikan penjelasan beralasan, memahami implikasi dan mengkomunikasikannya secara logis dan jelas, bekerja dan berkomunikasi dalam bahasa Inggris.</p>

                    </div>
                    <div class="col-sm-4 primary-img-bg" style="background-image:url({{asset('assets/img/ais-with-teacher.jpg')}})"></div>
                </div>
            </div>
    </section>
    <section class="mb-50">
        <div class="container">
            <div class='line-after mt-50'><h3><span class="text-lineafter fw-600">KURIKULUM NASIONAL</span></h3><div>
            <div class="row mt-30">
                    <div class="col-sm-4 primary-img-bg" style="background-image:url({{asset('assets/img/ais_it_lab.jpg')}})"></div>
                    <div class="col-sm-8">
                        <p>SMP-SMA Al Lathif merupakan sekolah formal yang terdaftar di Indonesia. Oleh karena itu untuk memenuhi standar pendidikan di Indonesia dan juga untuk mengenal budaya dan kearifan bangsa Indonesia AIS menggunakan kurikulum nasional Indonesia sesuai dengan Undang – undang Republik Indonesia No. 20 Tahun 2013.</p>
                        <p>Mata pelajaran yang dipelajari adalah Pendidikan Agama Islam dan budi pekerti (termasuk materi kitab-kitab seperti Riyadhus Shalihin, Taklim Mutaalim, Akhlakul Banin/Banat dll), Pendidikan Pancasila, Bahasa Indonesia, Matematika (integrasi dengan Cambridge Curriculum), Sains (Fisika, Kimia, Bilogi - integrasi Cambridge Curriculum), English (integrasi Cambridge Curriculum), Pendidikan Olahraga dan Kesehatan (Physical Education), Informatika (IT), Seni (Angklung), Prakarya dan Kewirausahaan, dan Tahfidz Qur'an</p>
                    </div>
                </div>
            </div>
    </section>

@endsection