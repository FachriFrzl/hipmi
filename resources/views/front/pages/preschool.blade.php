@extends('layouts.frontapp', ['title' => 'Preschool (TK/RA)'])

@section('content')
    <section class="header-page" style="background-image:url({{asset('assets/img/33055576268_5b20310992_z.jpg')}})">
        <div class="container">
            <h1 class="center-text fw-600 lt-2 mb-10">PRESCHOOL (TK)</h1>
        </div>
    </section>
    <section class="pages-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <p class="text-justify">Usia 6 tahun pertama dalam kehidupan seorang anak merupakan masa yang penting untuk membentuk perkembangan mereka. Sekitar 80 persen otak anak berkembang pada usia 0-6 tahun, atau dikenal sebagai masa emas tumbuh kembang anak. Berdasarkan penelitian para ahli, pada usia ini anak akan menyerap informasi seperti apapun tanpa melihat baik atau buruknya. Informasi ini nantinya akan menjadi fondasi pembetukan karakter, kepribadian, dan kemampuan kognitif mereka.</p>
                    <p>AIS berusaha memaksimalkan usia emas anak ini dengan memberikan pendidikan yang maksimal secara menarik dan menyenangkan yang terdiri atas pendidikan adab dan akhlak Islam; penguatan akidah Islam dan pembiasaan ibadah; pengenalan tahfidz Qur’an (mulai dari juz 30); peningkatan ilmu pengetahuan yang luas; pembiasaan belajar mandiri, kreativitas, dan keahlian berpikir kritis; pengembangan keahlian bahasa; dan pengembangan socio-emotional.</p>
                </div>
                <div class="col-sm-3">
                    @include('front.component.program_menu')
                </div>                
            </div>
        </div>
        
            
    </section>
<section>
<div class="row block-space bg-light-green mt-50"></div>
            <div class="row align-items-center">
                <div class="col-sm-3 preschool_img scroll-element js-scroll slide-left" style="background-image:url({{asset('assets/img/ais-nursery1.jpg')}})">
                </div>
                <div class="col-sm-5 preschool_img scroll-element js-scroll fade-in-bottom" style="background-image:url({{asset('assets/img/ais_nursery.jpg')}})"></div>
                <div class="col-sm-4 pb-20 pt-20 text-center scroll-element js-scroll slide-right">
                    <div class="container">
                        <h2 class="playgroup-title fw-600">Nursery</h2>
                        <h4>3-4 Tahun</h4>
                        <p>Mempersiapkan generasi Islami yang berakhlak mulia sejak dini dengan pendidikan adab dan akhlak Islam. Pembelajaran dikemas dalam permainan yang menarik sesuai perkembagan anak. Pembelajaran dilaksanakan selama 3 hari dalam seminggu.</p>
                        <a href="{{route('home')}}/pendaftaran" class="btn btn-light">DAFTAR SEKARANG</a>
                    </div>
                </div>
            </div>
            <div class="row block-space bg-sky-blue"></div>
            <div class="row align-items-center">
                <div class="col-sm-4 pb-20 pt-20 text-center scroll-element js-scroll slide-left">
                    <div class="container">
                    <h2 class="playgroup-title fw-600">Pre-Kindergarten</h2>
                        <h4>4-5 Tahun</h4>
                        <p>Program dirancang untuk 5 hari pertemuan dalam seminggu. Anak-anak mulai dilatih untuk mengikuti program tahfidz dengan metode yang menyenangkan. Bermain, bergerak, hands-on experiences tetap menjadi inti program dan menjadi bagian terintegrasi dengan pengenalan kehalian matematika, bahasa, dan literasi.</p>
                        <a href="{{route('home')}}/pendaftaran" class="btn btn-light">DAFTAR SEKARANG</a>
                    </div>

                </div>
                <div class="col-sm-5 preschool_img scroll-element js-scroll fade-in-bottom" style="background-image:url({{asset('assets/img/ais-pre-kd2.jpg')}})"></div>
                <div class="col-sm-3 preschool_img scroll-element js-scroll slide-right" style="background-image:url({{asset('assets/img/ais-pre-kd1.jpg')}})"></div>
            </div>
            <div class="block-space bg-red"></div>
            <div class="row align-items-center">
                
                <div class="col-sm-4 preschool_img scroll-element js-scroll slide-left" style="background-image:url({{asset('assets/img/ais-kd2.jpg')}})"></div>
                <div class="col-sm-2 preschool_img scroll-element js-scroll slide-left" style="background-image:url({{asset('assets/img/ais-kd1.jpg')}})"></div>
                <div class="col-sm-2 preschool_img scroll-element js-scroll slide-right" style="background-image:url({{asset('assets/img/ais-kd3.jpg')}})"></div>
                <div class="col-sm-4 pb-20 pt-20 text-center scroll-element js-scroll slide-right">
                    <div class="container">
                    <h2 class="playgroup-title fw-600">Kindergarten</h2>
                        <h4>6-7 Tahun</h4>
                        <p>Pada program ini anak-anak akan dibantu untuk mengembangkan keterampilan sosial-emosional, keterampilan fisik, kreativitas, dan belajar mandiri sebagai persiapan menuju sekolah dasar. Kegiatan dirancang secara tematik untuk mempersiapkan anak membaca, menulis dan berhitung. Aktivitas tahfidz, ibadah, dan pendidikan akhlak dilaksanakan secara terintegrasi dalam kegiatan harian anak.</p>
                        <a href="{{route('home')}}/pendaftaran" class="btn btn-light">DAFTAR SEKARANG</a>
                    </div>

                </div>
            </div>
            <div class="block-space bg-purple"></div>
</section>
@endsection