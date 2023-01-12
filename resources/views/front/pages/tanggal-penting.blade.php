@extends('layouts.frontapp', ['title' => 'Tanggal Penting'])

@section('content')
<section class="header-page" style="background-image:url({{asset('assets/img/education_investation.jpg')}})">
    <div class="container">
        <h1 class="center-text fw-600 lt-2 mb-10">TANGGAL PENTING</h1>
    </div>
</section>
<section class="pt-100 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">20 Desember 2022</th>
                    <td>Psikotes Pendaftar Bulan November - Desember 2022</td>
                    <td>Tempat: Al Lathif Islamic School</td>
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