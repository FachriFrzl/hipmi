@extends('layouts.frontapp', ['title' => 'Pertanyaan yang Sering Diajukan | FAQ'])

@section('content')
<section class="header-page" style="background-image:url({{asset('assets/img/ais_faq.jpg')}})">
    <div class="container">
        <h1 class="center-text fw-600 lt-2 mb-10">FAQ</h1>
    </div>
</section>
<section class="pt-100 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Apakah Al Lathif Islamic School terdaftar secara resmi?
                        </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Al Lathif Islamic School terdaftar resmi di Kementerian Pendidikan dan Kebudayaan Indonesia dan telah mendapatkan Nomor Pokok Sekolah Nasional (NPSN). NPSN AIS adalah 69956194.
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Di mana lokasi Al Lathif Islamic School?
                        </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Lokasi AIS berada di pusat Kota Bandung yaitu di Jalan Cipedes Selatan No. 85, Kota Bandung. Lokasi ini sangat strategis dan mudah dijangkau dengan menggunakan berbagai moda transportasi. Informasi mengenai cara menuju AIS, silahkan lihat di Petunjuk Ke Sekolah.
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Berapa jumlah murid dalam setiap kelasnya? 
                        </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <table class="table table-striped">
                            <thead>
                            <tr>
                            <th>Program</th>
                            <th>Jumlah Siswa Per Kelas</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                            <td style="text-align: left;">Nursery</td>
                            <td>Max. 7 orang</td>
                            </tr>
                            <tr>
                            <td style="text-align: left;">Prekindergarten &amp; Kondergarten</td>
                            <td>Max. 10 orang</td>
                            </tr>
                            <tr>
                            <td style="text-align: left;">Primary School</td>
                            <td>Max. 15 Orang</td>
                            </tr>
                            <tr>
                            <td style="text-align: left;">Secondary School</td>
                            <td>Max. 20 Orang</td>
                            </tr>
                            </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                            Jam berapa masuk dan pulang sekolah? Hari apa aja masuk ke sekolah?
                        </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <table class="table table-striped">
                            <thead>
                            <tr>
                            <th>Program</th>
                            <th>Jam Masuk - Pulang Sekolah</th>
                            <th>Hari Sekolah</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                            <td style="text-align: left;">Nursery</td>
                            <td>08.00 - 13.00 <br> 08.00 - 11.00</td>
                            <td>Senin, Rabu<br> Jum'at</td>
                            </tr>
                            <tr>
                            <td style="text-align: left;">Prekindergarten &amp; Kondergarten</td>
                            <td>08.00 - 13.00 <br> 08.00 - 11.00</td>
                            <td>Senin - Kamis<br> Jum'at</td>
                            </tr>
                            <tr>
                            <td style="text-align: left;">Primary School</td>
                            <td>06.30 - 16.00</td>
                            <td>Senin - Jum'at</td>
                            </tr>
                            <tr>
                            <td style="text-align: left;">Secondary School</td>
                            <td>06.30 - 16.00</td>
                            <td>Senin - Jum'at</td>
                            </tr>
                            </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                            Fasilitas apa saja yang ada di Al Lathif Islamic School?
                        </button>
                        </h2>
                        <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            AIS memiliki fasilitas belajar yang cukup lengkap mulai dari perlengkapan kelas, lapangan olahraga, laboratorium, perpustakaan, ruang musik, ruang ICT, dan akses internet sekolah. Informasi lebih lengkap mengenai fasilitas Al Lathif Islamic School dapat dilihat di <b><a href="{{route('home')}}/fasilitas">Fasilitas</a></b>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading6">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                            Saya tidak bisa mengantar/menjemput anak, apakah ada layanan jemputan/antar? 
                        </button>
                        </h2>
                        <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Ya. Ada. AIS menyediakan layanan jemput/antar. Waktu jemput/antar disesuaikan dengan waktu masuk dan keluar sekolah siswa. Untuk mengurangi waktu perjalanan siswa akan dikelompokan sesuai dengan arah rumah siswa dari sekolah.
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading6">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                            Apakah ada layanan Catering untuk Snack Time dan Makan Siang?                    
                        </button>
                        </h2>
                        <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Ya. Ada. AIS menyediakan layanan catering. Kami berusaha menyediakan makanan yang halal, sehat, dan bergizi seimbang.
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading7">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                            Setalah anak saya diterima di AIS, apakah harus mendaftar ulang setiap tahun?                     
                        </button>
                        </h2>
                        <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Ya. Pendaftaran ulang kami laksanakan untuk memastikan bahwa sekolah mendapatkan informasi terkini dari setiap murid. Pendaftaran ulang dapat dilaksanakan secara online ataupun dengan datang langsung ke sekolah.
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading8">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collaps8" aria-expanded="false" aria-controls="collaps8">
                        Saya tertarik dengan AIS, Apakah saya bisa mencicil investasi awal?                  
                        </button>
                        </h2>
                        <div id="collaps8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        Anda dapat mencicil biaya maksimal 5 kali sampai tanggal yang telah ditentukan, silahkan hubungi konsultan pendaftaran Anda. Apabila memerlukan waktu lebih lama, Anda dapat melakukan perjanjian dengan Koperasi BMT Noor Rakhmah untuk membantu biaya pendidikan.
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading9">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                            Apakah ada bantuan keuangan atau beasiswa di AIS?                
                        </button>
                        </h2>
                        <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Ada. Kami memfasilitasi murid berprestasi ataupun murid dengan latar belakang ekonomi kurang mampu untuk mendapatkan beasiswa ataupun bantuan keuangan lain dari pemerintah ataupun lembaga lain penyedia beasiswa dan bantuan keuangan pendidikan. Informasi selengkapnya silahkan lihat  <a href="{{route('home')}}/beasiswa"><b>Informasi Beasiswa.</b></a>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading10">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                        Apakah AIS menerima murid pindahan?                  
                        </button>
                        </h2>
                        <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Ya. Kami menerima murid pindahan dari dalam negeri dan luar negeri baik dari sekolah negeri maupun swasta.


                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                @include('front.component.consultan')
                @include('front.component.pendaftaran_menu')
            </div>
        </div>
    </div>
</section>
@endsection