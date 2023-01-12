@extends('layouts.frontapp', ['title' => 'Kurikulum Primary School (SD/MI)'])

@section('content')
    <section class="header-page" style="background-image:url({{asset('assets/img/ais-primary-top.jpg')}})">
        <div class="container">
            <h1 class="center-text fw-600 lt-2 mb-10">KURIKULUM SEKOLAH SD</h1>
        </div>
    </section>
    <section class="pages-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 scroll-element js-scroll slide-left">
                    <h3 class="mt-20 mb-50 fw-600">Berkarakter Islam, Berwawasan Global</h3>
                    <p>Al Lathif Islamic International School mengadopsi program-pogram yang menerapkan proses pembelajaran standar internasional dan dapat menghasilkan pembelajaran yang terbaik. Sesuai dengan visi kami yaitu mengembangkan kecerdasan anak menuju Generasi Qur’ani yang berakhlak mulia dan berwawasan global untuk memenuhi peran mereka sebagai khalifah di muka bumi. Kami menggunakan tiga kurikulum yang dipadukan dalam satu sistem kurikulum yang lengkap dan sesuai dengan kebutuhan para murid, terdiri atas Kurikulum Cambridge, Kurikulum Tahfidz Qur’an dan Kurikulum Nasional.</p>
                </div>
                <div class="col-sm-3 scroll-element js-scroll slide-right">
                    @include('front.component.program_menu')
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class='line-after mt-50'><h3><span class="text-lineafter fw-600">PENDIDIKAN ISLAM</span></h3><div>
            <div class="row  mt-30">
                <div class="col-sm-7 scroll-element js-scroll slide-left">
                    <p>Di AIS, pendidikan Islam merupakan pendidikan pokok yang diterapkan sejak dini. Pendidikan Islam terdiri dari pendidikan Aqidah Islam Ahlussunnah Wal Jamaah, adab dan ahlak, ibadah, dan sejarah Islam berdasarkan Al Qur’an, Hadits, dan Ijma para ulama.</p>
                    <p>Pendidikan Islam ini dilaksanakan melalui pembelajaran dalam kelas, penyampaian kisah-kisah generasi terbaik Islam, teladan, dan pembiasaan dalam kehidupan sehari-hari dalam kehidupan sekolah.</p>
                </div>
                <div class="col-sm-5 primary-img-bg scroll-element js-scroll slide-right" style="background-image:url({{asset('assets/img/ais-primary-top.jpg')}})">
                </div>
            </div>
            <div class='line-after  mt-50'><h3><span class="text-lineafter fw-600">TAHFIDZ AL QUR'AN</span></h3><div>
            <div class="row  mt-30">
                <div class="col-sm-5 primary-img-bg scroll-element js-scroll slide-left" style="background-image:url({{asset('assets/img/wisuda-hafidz11.jpg')}})"></div>
                <div class="col-sm-7 scroll-element js-scroll slide-right">
                    <p>Kegiatan Tahfidz Qur’an di AIS dilaksanakan setiap hari, yaitu pagi sampai shalat dhuha, selepas shalat dzuhur dan ashar. Hal ini bertujuan untuk membiasakan anak terus dekat dengan Al Qur’an dan semakin mencintainya.</p>
                    <p>Untuk murid tingkat dasar, metode yang digunakan adalah metode takrir, yaitu ustadz membacakan ayat yang mau dihafal di depan anak-anak, dengan makhraj dan tajwid yang benar. Kemudian setelah itu anak disuruh menirukan bacaan gurunya tersebut sampai anak yang di dalam kelas tersebut hafal semua dengan bacaan yang benar.</p>
                    <p>Setelah para murid dapat membaca Al Qur’an dengan baik, metode yang digunakan adalah metode mutabaah, yaitu metode menghafal mandiri. Hasil dari menghafalnya akan diperiksa secara rutin oleh para ustadz/ustadzah.</p>
                    <p>Untuk menunjang hafalan Al Qur’an, mulai kelas 2 SD para murid di AIS akan mempelajari dasar-dasar membaca Al Qur’an (makhorizul huruf dan tajwid)  langsung bersama para syaikh dari Gaza, Palestina yang telah memiliki sanad Al Qur’an. Dengan ini diharapkan para murid dapat menghafalkan Al Qur’an dengan bacaan yang benar (fasih).</p>
                    <h5 class="fw-600">Target Hafalan</h5>
                    <p>Target hafalan Al Qur’an para murid di tingkat sekolah dasar adalah 5 juz. Terdiri atas surah Al Fatihah, Juz 30, Juz 29, Juz 28, juz 27, dan surah pilihan (Surah Ad Duhkan, Yasin, dan Al Kahfi).</p>
                    <h5 class="fw-600">Ujian dan Sanad Al Qur’an</h5>
                    <p>Para murid akan diuji hafalannya secara berkala untuk memastikan hafalan mereka tetap mutiqin. Para murid yang telah menyelesaikan hafalan sesuai target dan dinyatakan lulus dalam ujian dapat mengikuti ujian sanad Al Qur’an untuk mendapatkan sertifikat Sanad hafalan Al Qur’an.</p>
                </div>
            </div>
            <div class='line-after mt-50'><h3><span class="text-lineafter fw-600">KURIKULUM INTERNASIONAL</span></h3><div>
            <div class="row mt-30">
                <div class="col-sm-7 scroll-element js-scroll slide-left">
                    <p>Pada level sekolah dasar AIS menggunakan kurikulum internasional (Cambridge Primary Program). Program ini memberikan pengalaman kepada siswa-siswi AIS kurikulum kelas dunia untuk mengembangkan keterampilan dan pemahaman dalam mata pelajaran bahasa Inggris, matematika, dan sains.</p>
                    <p>Kurikulum ini digunakan oleh lebih dari 10.000 sekolah di 160 negara di dunia sehingga para murid Al Lathif memiliki standard keilmuan yang sama dengan berbagai sekolah di seluruh dunia yang menggunakan standar kurikulum tersebut. Dengan ini, para murid dapat mengerjakan project bersama dengan para siswa dari sekolah laindi beberapa negara lain yang telah bermitra dengan AIS.</p>
                    <p>Untuk mengetahui hasil belajar, ada dua jenis penilaian yang akan diikuti oleh para murid yaitu Cambridge Primary Progression Tests and Cambridge Primary Checkpoint. Sertifikat hasil dari test ini dapat digunakan untuk pindah antar sekolah Cambridge dapat melanjutkan studi mereka dengan mengikuti kurikulum yang sama.</p>
                </div>
                <div class="col-sm-5 primary-img-bg scroll-element js-scroll slide-right" style="background-image:url({{asset('assets/img/allathif-islamic-school-primary-scaled.jpg')}})"></div>
            </div>
            <div class='line-after mt-50'><h3><span class="text-lineafter fw-600">KURIKULUM NASIONAL</span></h3><div>
            <div class="row mt-30 mb-30">
                <div class="col-sm-5 primary-img-bg scroll-element js-scroll slide-left" style="background-image:url({{asset('assets/img/ais-angklung.jpg')}})"></div>
                <div class="col-sm-7 scroll-element js-scroll slide-right">
                    <p>SD Al Lathif merupakan sekolah formal yang terdaftar di Indonesia. Oleh karena itu untuk memenuhi standar pendidikan di Indonesia dan juga untuk mengenal budaya dan kearifan bangsa Indonesia AIS menggunakan kurikulum nasional Indonesia sesuai dengan Undang – undang Republik Indonesia No. 20 Tahun 2013.</p>
                    <p>AIS melakukan integrasi kurikulum antara kurukulum nasional, kurikulum internasional, dan kurikulum Islam berdasarkan analisa secara holistik agar kompetensi yang diharapkan dapat tercapai dengan tetap memperhatikan kemampuan dan potensi setiap siswa. </p>
                </div>
            </div>
        </div>
    </section>

@endsection