@extends('layouts.frontapp', ['title' => 'Kehidupan Sekolah Primary School (SD/MI)'])

@section('content')
    <section class="header-page" style="background-image:url({{asset('assets/img/ais-primary-top.jpg')}})">
        <div class="container">
            <h1 class="center-text fw-600 lt-2 mb-10">KEHIDUPAN SEKOLAH SD</h1>
        </div>
    </section>
    <section class="pages-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 scroll-element js-scroll fade-in-up">
                    <h4 class="fw-600">Waktu Belajar</h4>
                    <p>Kegiatan pembelajaran di sekolah dilaksanakan selama 5 hari, dari hari Senin sampai dengan hari Jum’at. Kegiatan dimulai pada pukul 06.30 sampai dengan 16.00. Satu kali dalam sebulan, sekolah mengadakan kegiatan berenang yang dilaksanakan pada hari Jum’at. Jadwal kegiatan berenang dapat dilihat pada kalender akademik.</p>
                    <h4 class="fw-600 mt-30"><span class="italic">Snack Time</span> dan Makan Siang</h4>
                    <p>Pada saat istirahat pertama semua murid akan melaksanakan snack time dan pada saat istirahat kedua akan melaksanakan makan siang bersama. Oleh karena itu, semua murid wajib membawa makanan atau membelinya di kantin sekolah untuk kegiatan tersebut. Adapun petunjuk mengenai menu makanan dan penyajiannya dapat dilihat pada buku pedoman siswa.</p>
                    <h4 class="fw-600 mt-30">Seragam Sekolah</h4>
                    <p>Siswa akan menggunakan 3 seragam harian dan 3 seragam khusus. Detail penggunaan seragama tersebut kami cantumkan pada buku pedoman siswa.</p>
                    <h4 class="fw-600 mt-30"><span class="italic">Catering</span> dan Jemputan Sekolah</h4>
                    <p>AIS menyediakan catering untuk makan siang dan juga mobil jemput - antar sampai rumah. Informasi dan pendaftaran catering dan layanan antar-jemput siswa dapat menghubungi bagian administrasi</p>
                    <h4 class="fw-600 mt-30">Gambaran Kegiatan Harian</h4>
                    <!-- component -->
                    <table class="table-auto w-full">
                        <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                            <tr>
                                <th class="p-2 whitespace-nowrap" style="width:200px;">
                                    <div class="font-semibold text-left">Waktu</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Aktivitas</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-sm divide-y divide-gray-100">
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                06.30 – 07.45
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                Program Tahfidz
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                07.45 – 08.00
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                Shalat Dhuha
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                08.00 – 08.15
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                Istirahat Pertama (Snack time)
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                08.15 – 09.30
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                Line up
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                09.30 – 11.50
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                Kegiatan Belajar
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                11.50 – 12.50
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                Shalat Dzuhur Berjamaah & Tahfidz
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                12.50 – 13.15
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                Istirahat Kedua (Makan Siang)
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                13.15 – 15.00
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                Kegiatan Belajar
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                15.00 – 16.00
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                Shalat Ashar Berjamaah & Tahfidz
                                </td>
                            </tr>
                        </tbody>
                    </table>
                
                </div>
                <div class="col-sm-3">
                    @include('front.component.program_menu')
                </div>
                
            </div>
            
        </div>
    </section>

@endsection