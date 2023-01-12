@extends('layouts.frontapp', ['title' => 'Investasi Pendidikan'])

@section('content')
<section class="header-page" style="background-image:url({{asset('assets/img/education_investation.jpg')}})">
    <div class="container">
        <h1 class="center-text fw-600 lt-2 mb-10">INVESTASI PENDIDIKAN</h1>
    </div>
</section>
<section class="pt-100 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <p>Kami berusaha untuk senantiasa menyediakan program – program pendidikan terbaik dengan biaya yang terjangkau untuk menyediakan generasi – generasi terbaik sebagai aset Bangsa dan juga umat Islam di masa yang akan datang.</p>
                <p>Berikut investasi pendidikan di Al Lathif Islamic School:</p>
                <h4 class="widget_title">Nursery</h4>
                <table class="table">
                    <tbody>
                        <tr class="table-active">
                            <th class="header-table-fee" style="text-align: center;" width="50%">Detail Investasi Nursery</th>
                            <th class="header-table-fee" style="text-align: center;" width="50%">Besar Investasi (Rp)</th>
                        </tr>
                        <tr>
                            <td style="text-align: left;">
                            <strong>Investasi Awal</strong><br>
                            Pendaftaran &amp; Tes Psikologi <br>
                            Pengembangan Fasilitas <br>
                            Sumber Belajar (Buku &amp; Digital Learning) <br>
                            Alat Belajar <br>
                            Kegiatan Di Luar Sekolah <br>
                            Seragam (4 buah)
                            </td>
                            <td style="text-align: right;"><b>8.520.000</b></td>
                        </tr>
                        <tr>
                            <td style="text-align: left;">Investasi bulanan</td>
                            <td style="text-align: right;"><b>500.000</b></td>
                        </tr>                
                    </tbody>
                </table>
                <h4 class="widget_title">Prekindergarten & Kindergarten</h4>
                <table class="table">
                    <tbody>
                        <tr class="table-active">
                            <th class="header-table-fee" style="text-align: center;" width="50%">Prekindergarten & Kindergarten</th>
                            <th class="header-table-fee" style="text-align: center;" width="50%">Besar Investasi (Rp)</th>
                        </tr>
                        <tr>
                            <td style="text-align: left;">
                            <strong>Investasi Awal</strong><br>
                            Pendaftaran &amp; Tes Psikologi <br>
                            Pengembangan Fasilitas <br>
                            Sumber Belajar (Buku &amp; Digital Learning) <br>
                            Alat Belajar <br>
                            Kegiatan Di Luar Sekolah <br>
                            Seragam (4 buah)
                            </td>
                            <td style="text-align: right;"><b>9.650.000</b></td>
                        </tr>
                        <tr>
                            <td style="text-align: left;">Investasi bulanan</td>
                            <td style="text-align: right;"><b>700.000</b></td>
                        </tr>                
                    </tbody>
                </table>
                <h4 class="widget_title">SD, SMP, SMA</h4>
                <table class="table">
                    <tbody>
                        <tr class="table-active">
                            <th class="header-table-fee" style="text-align: center;" width="50%">Full Day School</th>
                            <th class="header-table-fee" style="text-align: center;" width="50%">Besar Investasi (Rp)</th>
                        </tr>
                        <tr>
                            <td style="text-align: left;">
                            <strong>Investasi Awal</strong><br>
                            Pendaftaran &amp; Tes Psikologi <br>
                            Pengembangan Fasilitas <br>
                            Sumber Belajar (Buku &amp; Digital Learning) <br>
                            Alat Belajar <br>
                            Kegiatan Di Luar Sekolah <br>
                            Seragam (4 buah)
                            </td>
                            <td style="text-align: right;"><b>22.500.000</b></td>
                        </tr>
                        <tr>
                            <td style="text-align: left;">Investasi bulanan</td>
                            <td style="text-align: right;"><b>1.500.000</b></td>
                        </tr>                
                    </tbody>
                </table>
                <h4 class="widget_title">SMP & SMA Plus Pesantren</h4>
                <table class="table">
                    <tbody>
                        <tr class="table-active">
                            <th class="header-table-fee" style="text-align: center;" width="50%">Full Day School + Pesantren</th>
                            <th class="header-table-fee" style="text-align: center;" width="50%">Besar Investasi (Rp)</th>
                        </tr>
                        <tr>
                            <td style="text-align: left;">
                            <strong>Investasi Awal</strong><br>
                            Pendaftaran &amp; Tes Psikologi <br>
                            Pengembangan Fasilitas <br>
                            Sumber Belajar (Buku &amp; Digital Learning) <br>
                            Alat Belajar <br>
                            Kegiatan Di Luar Sekolah <br>
                            Seragam (4 buah)
                            </td>
                            <td style="text-align: right;"><b>27.500.000</b></td>
                        </tr>
                        <tr>
                            <td style="text-align: left;">Investasi bulanan</td>
                            <td style="text-align: right;"><b>2.500.000</b></td>
                        </tr>                
                    </tbody>
                </table>
                <h4 class="widget_title">Program Tahfidz Takhasus</h4>
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
            <div class="col-sm-3">
                @include('front.component.consultan')
                @include('front.component.pendaftaran_menu')
            </div>
        </div>
    </div>
</section>
@endsection