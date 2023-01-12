@extends('layouts.frontapp', ['title' => 'Informasi Beasiswa'])

@section('content')
<section class="header-page" style="background-image:url({{asset('assets/img/education_investation.jpg')}})">
    <div class="container">
        <h1 class="center-text fw-600 lt-2 mb-10">INFORMASI BEASISWA</h1>
    </div>
</section>
<section class="pt-100 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <p>Al Lathif Islamic School memberikan kesempatan kepada putra – putri terbaik yang akan masuk ke Sekolah Dasar (Primary School), Sekolah Menengah Pertama (Lower Secondary School), dan Sekolah Menengah Atas (Senio Secondary School) untuk mengikuti pendidikan di AIS melalui jalur beasiswa.</p>
                <h4 class="widget_title mt-30">CAKUPAN BEASISWA</h4>
                <table class="table">
                    <tbody>
                        <tr class="table-active">
                            <th class="header-table-fee" style="text-align: center;" width="50%">Full Day School + Pesantren</th>
                            <th class="header-table-fee" style="text-align: center;" width="50%">Besar Investasi (Rp)</th>
                        </tr>
                        <tr>
                            <td style="text-align: left;">
                            <strong>Detail Investasi</strong><br>
                            Pendaftaran &amp; Tes Psikologi <br>
                            Pengembangan Fasilitas <br>
                            </td>
                            <td style="text-align: right;"><b>0,- (FREE)</b><br><span style="text-decoration: line-through;"><small>11.000.000,-</small></span></td>
                        </tr>
                        <tr>
                            <td style="text-align: left;">Investasi bulanan</td>
                            <td style="text-align: right;"><b>0,- (FREE)</b><br><span style="text-decoration: line-through;"><small>1.500.000,-</small></span></td>

                        </tr>                
                    </tbody>
                </table>
                <h4 class="widget_title mt-30">PERSYARATAN UNTUK CALON SISWA SD</h4>
                <ul class="list-show">
                    <li>Memiliki akhlak yang baik dan berdisiplin</li>
                    <li>Terbiasa sholat wajib dan sunnah</li>
                    <li>Mampu membaca dan berhitung dasar</li>
                    <li>Berkomitmen menyelesaikan pendidikan di AIS dengan sebaik-baiknya.</li>
                    <li>Berusia minimal 6 tahun dan maksimal 7 tahun pada tanggal 01 Juli 2023</li>
                    <li>Memiliki hafalan Al Qur'an minimal setengah Juz</li>
                    <li>Lulus seleksi beasiswa Al Lathif</li>
                </ul>
                <h4 class="widget_title mt-30">PERSYARATAN UNTUK CALON SISWA SMP & SMA</h4>
                <ul class="list-show">
                    <li>Memiliki nilai raport rata minimal 75 atau memiliki prestasi dalam bidang akademik atau non-akademik.</li>
                    <li>Memiliki akhlak yang baik dan berdisiplin</li>
                    <li>Terbiasa sholat wajib berjamaah serta shalat Dhuha dan Rawatib</li>
                    <li>Berkomitmen untuk menjadi menghafal Al-Qur’an dan menyelesaikan pendidikan di AIS dengan sebaik-baiknya</li>
                    <li>Memiliki hafalan Al Qur'an minimal setengah Juz</li>
                    <li>Lulus seleksi beasiswa Al Lathif</li>
                </ul>
                <a href="{{route('home')}}/formdaftar" class="btn btn-green">DAFTAR SEKARANG</a>

                <h4 class="widget_title mt-30">PENDAFTARAN</h4>
                <p>Pendafatan dilaksanakan secara daring (online) melalui halaman <a href="{{route('home')}}/formdaftar" class="">{{route('home')}}/formdaftar</a>. Pendaftaran dibuka sampai tanggal <b>31 Desember 2022</b></p>
                <h4 class="widget_title mt-30">SELEKSI</h4>
                <p>Seleksi dilaksanakan pada tanggal <b>14 Januari 2023</b> mulai pukul 08.00 WIB.</p>
            </div>
            <div class="col-sm-3">
                @include('front.component.consultan')
                @include('front.component.pendaftaran_menu')
            </div>
        </div>
    </div>
</section>
@endsection