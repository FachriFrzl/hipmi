@extends('layouts.frontapp', ['title' => 'Karir'])

@section('content')
    <section class="header-page" style="background-image:url({{asset('assets/img/career.jpg')}})">
        <div class="container">
            <h1 class="center-text fw-600 lt-2 mb-10">KARIR</h1>
        </div>
    </section>
    @include('front.component.profile_menu')
    <section class="pages-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <img src="{{asset('assets/img/grad-school-applications-1200-1200x794.jpg')}}" alt="">
                </div>
                <div class="col-sm-8">
                    <p>Al-Lathif Islamic School sangat menyambut baik para pendidik dan tenaga kependidikan yang berkualitas dan berpengalaman untuk mengaplikasikan keilmuannya, mencari tantangan baru, dan bermanfaat bagi peningkatan kualitas generasi penerus bangsa di masa yang akan datang. Calon pendidik di sekolah kami akan diseleksi dalam empat bidang: praktek pengajaran berkualitas tinggi; inovasi dalam pembelajaran dan pengembangan kurikulum; hubungan dengan siswa, staf, dan orang tua; serta kontribusi terhadap sekolah.</p>
                    <p>AIS berkomitmen untuk menjaga kualitas pelayanan pendidikan dengan baik. Oleh karena itu, pelaksanaan seleksi dalam perekrutan dan pemeriksaan latar belakang pengajar akan kami lakukan sebelum adanya pengangkatan.</p>
                    <p>Bagi yang berminat dan memiliki kualifikasi yang disyaratkan, silahkan kirimkan lamaran lengkap beserta dokumen pendukung yang releven ke email kami:</p>
                    <br>
                    <a href="mailto:allathif.sch@gmail.com" class="btn btn-green">Email: allathif.sch@gmail.com</a>
                </div>
            </div>
            
        </div>
    </section>

@endsection