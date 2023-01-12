@extends('layouts.frontapp', ['title' => 'Tahfidz Takhasus'])

@section('content')
<section class="header-page" style="background-image:url({{asset('assets/img/tahfidz_takhasus_ais.jpg')}})">
    <div class="container">
        <h1 class="center-text fw-600 lt-2 mb-10">TAHFIDZ TAKHASUS</h1>
    </div>
</section>
<section class="home-prestasi mb-20">
    <div class="background-home-prestasi">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 scroll-element js-scroll slide-left">
                    <h3 class="mt-20">Menghafal Al Qur’an 30 Juz dalam Waktu 1 Tahun. Bisakah?</h3>
                    <h1 class="fw-800 mt-30 t-yellow">Insya Allah bisa!</h1>
                    <h5 class="mt-30">Caranya adalah dengan mengikuti <span class="fw-800">Program Takhasus </span> yang di selenggarakan oleh Al Lathif Islamic School.</h5>
                    <button class="btn-light mt-30 mb-20">DAFTAR SEKARANG</button>
                </div>
                <div class="col-sm-4 scroll-element js-scroll slide-right">
                    @include('front.component.program_menu')
                </div>
            </div>
        </div>
    </div>
</section>
<section class="home-agenda mb-20">
    <div class="container">
        <div class="row">
            <div class="col-md-6 home-col-border scroll-element js-scroll slide-left primary-img-bg" style="background-image:url({{asset('assets/img/allathif-wisuda.jpg')}})">
            </div>
            <div class="col-md-6 home-widget-agenda scroll-element js-scroll slide-right">
                <p><b>Program Tahfidz Takhasus</b> adalah program khusus menghafal Al Qur'an. Siswa/siswi yang mengikuti program ini akan tinggal di asrama Al Lathif dan setiap hari akan terus belajar Al Qur'an dan menghafalnya. Program ini akan dibimbing oleh syekh dan ustadz yang telah hafal Al Qur'an 30 Juz.</p>
                <p>Setiap hari para siswa/siswi akan menghafal Al Qur'an dan menyetorkan hafalannya (tasmi') kepada Syekh atau ustadz sebanyak 1,5 atau 2 halaman. Dengan demikian diharapkan siswa yang mengikuti program ini dapat hafidz 30 Juz Al Qur'an dalam waktu 1 - 2 tahun. </p>
            </div>
        </div>
    </div>
</section>
<section class="home-testimoni mb-20">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7 scroll-element js-scroll slide-left">
                <h3 class="fw-600 mb-30">Dibina Langsung Oleh Syaikh Bersanad</h3>
                <p>Program ini dibina langsung oleh Syaikh dari Palestina yang telah memiliki Sertifikat Sanad Al Qur’an 30 Juz dengan Riwayat yang bersambung hingga Rasulullah Saw. Program ini merupakan program khusus untuk menghafal dan memperbaiki bacaan Al Qur’an sampai 30 Juz.</p>
            </div>
            <div class="col-md-5 scroll-element js-scroll slide-right">
                <img src="{{asset('assets/img/allathif-tahfidz-takhasus_with_syaikh.png')}}" alt="" class="thumbnail">
            </div>
        </div>
    </div>
</section>
<section class="home-tahfidz mb-20">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 home-col-border scroll-element js-scroll slide-left primary-img-bg" style="background-image:url({{asset('assets/img/allathif-tahfidz-takhasus.jpg')}})">
            </div>
            <div class="col-md-7 scroll-element js-scroll slide-right">
                <h3 class="fw-600 mb-30">Siapa saja yang bisa mengikuti program ini?</h3>
                <p>Siapapun bagi Anda muslimin/muslimat yang bersungguh-sungguh untuk menjadi seorang hafidz Qur’an 30 Juz baik remaja maupun dewasa. Adapun syarat untuk mengikuti program ini adalah:</p>
                    <ul class="list-show">
                        <li>Memiliki komitmen yang kuat untuk menghafal Al Qur'an 30 Juz</li>
                        <li>Bersedia tinggal di asrama Al Lathif</li>
                        <li>Lancar dalam membaca Al Qur'an</li>
                        <li>Bagi peserta usia sekolah SMP/SMA dapat mengikuti program ini selama 1 tahun selanjutnya dapat mengikuti pendidikan di SMP/SMA Al Lathif</li>
                    </ul>
            </div>
            
        </div>
    </div>
</section>
<section class="home-tahfidz-manfaat mb-20">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7 scroll-element js-scroll slide-left">
                <h3 class="fw-600 mb-30">MANFAAT YANG DIPEROLEH SAAT MENGIKUTI PROGRAM INI:</h3>
                    <ul class="list-show">
                        <li>Menjadi seorang muslim/muslimat yang senantiasa dekat dengan Al Qur’an</li>
                        <li>Dibimbing langsung oleh para Syaikh yang telah Hafidz 30 Juz dan bersanad baik hafalan maupun bacaannya</li>
                        <li>Berkumpul Bersama para ahli Qur’an yang senantiasa saling mendukung untuk menjadi Hafidz Qur’an</li>
                        <li>Dapat mengikuti ujian Sanad Al Qur’an</li>
                        <li>Mendapat berbagai pahal dan keutamaan dari Allah Swt sebagai seorang penghafal Al Qur’an</li>
                    </ul>
            </div>
            <div class="col-md-5 home-col-border scroll-element js-scroll slide-right primary-img-bg" style="background-image:url({{asset('assets/img/ais-tahfidz-takhasus-benefit.jpg')}})">
            </div>
        </div>
    </div>
</section>
<section class="home-tahfidz-investasi mb-20">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 home-col-border scroll-element js-scroll slide-left primary-img-bg" style="background-image:url({{asset('assets/img/wisuda-hafidz11.jpg')}})">
            </div>
            <div class="col-md-7 scroll-element js-scroll slide-right">
                <h3 class="fw-600 mb-30">Investasi Pendidikan</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">Detail Investasi</th>
                            <th scope="col">Besar Investasi (IDR)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Investasi Awal:<br>
                                    Pendaftaran & Tes
                                    Pengembangan Fasilitas
                                </td>
                                <td>5.000.000</td>
                            </tr>
                            <tr>
                                <td>Investasi Bulanan</td>
                                <td>1.000.000</td>
                            </tr>
                        </tbody>
                    </table>
            </div>
            
        </div>
    </div>
</section>
<section style="background-color:#003366;" class="text-center t-white pt-100 pb-50">
    <div class="container">
        <h3>Ayo segera daftarkan diri Anda sebelum kehabisan waktu!</h3>
        <a href="" class="btn btn-light mt-30 mb-30">DAFTAR SEKARANG</a>
        <h5 class="mb-20">Informasi Selengkapnya Hubungi:</h5>
        <div class="row justify-content-center">
            <div class="col-sm-3 mb-10">
                <a href="https://wa.me/6281234567?text=Bismillah,%20mohon%20informasi%20program%20Takhasus%20Tahfidz%20Di%20AlLathif" class="btn btn-green">+62 821-1731-9090</a><br>Whatsapp
            </div>
            <div class="col-sm-3">
                <a href="tel:+62813-2259-5640" class="btn btn-green">+62 813-2259-5640</a><br>Telepon
            </div>
        </div>

    </div>
</section>
@endsection