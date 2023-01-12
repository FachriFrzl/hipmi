@extends('layouts.frontapp', ['title' => 'Prosedur Pendaftaran'])

@section('content')
    <section class="header-page" style="background-image:url({{asset('assets/img/register.jpg')}})">
        <div class="container">
            <h1 class="center-text fw-600 lt-2 mb-10">PROSEDUR PENDAFTARAN</h1>
        </div>
    </section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <h2 class="text-center mt-100 mb-100 fw-600">PROSEDUR PENDAFTARAN</h2>
                <p class="mb-30">Ayah/Bunda/Anda, terimakasih telah memilih Al Lathif Islamic School menjadi bagian dari tujuan pendidikan Ananda. Semoga Allah Swt memberikan pilihan yang terbaik. Berikut adalah langkah-langkah pendaftaran di Al Lathif Islamic School untuk Preschool (TK), Primary School (SD), Secondary School (SMP & SMA), dan Program Tahfidz Takhasus:</p>
                <h5 class="fw-600">Langkah 1: Mengisi Formulir Pendaftaran</h5>
                <p>Pendaftaran ini untuk memastikan bahwa putra/putri Anda tercatat pada urutan pendaftaran.</p>
                <div class="mt-30 mb-30">
                    <a href="" class="btn btn-green">FORMULIR PENDAFTARAN</a>
                </div>
                <h5 class="fw-600 mt-50">Langkah 2: Membayar Investasi Pendidikan</h5>
                <p>Membayar investasi pendidikan minimal sebesar <b>20%</b> dari <b>total investasi pendidikan</b> untuk <b>umum</b> atau <b>investasi awal</b> untuk <b>program beasiswa</b> . Pembayaran bisa ditransfer langsung ke rekening Al Lathif Islamic School / Yayasan Noor Rakhmah. Mohon pastikan rekening tujuan pengiriman adalah sebagai berikut:</p>
                <hr>
                <div class="text-center">
                    <p class="mt-20">Pemilik Rekening:</p>
                    <h6 class="fw-600">Yayasan Noor Rakhmah Al-Lathif</h6>
                    <p class="mt-20">Nama Bank:</p>
                    <h6 class="fw-600">Bank Syariah Indonesia (Kode Transfer: 451)</h6>
                    <p class="mt-20">Nomor Rekening:</p>
                    <h6 class="fw-600 mb-20">686.354.6410</h6>
                </div>
                <hr>
                <p class="mt-20">Jika tidak melanjutkan untuk mendaftar di AIS atau gugur dalam seleksi, maka seluruh dana investasi pendidikan yang telah dibayarkan akan dikembalikan kecuali biaya pendaftaran dan tes psikologi.</p>
                <p class="t-red fw-600">Hati-hati terhadap penipuan yang mengatas namakan AIS. Kami hanya menggunakan rekening pendaftaran yang tercantum di atas. </p>
                <h5 class="fw-600 mt-50">Langkah 3: Mengirimkan Bukti Pembayaran</h5>
                <p>Bukti pembayaran dapat dikirim ke WhatsApp: <b>0811-2311-369</b></p>
                <h5 class="fw-600 mt-50">Langkah 4: Melakukan Psikotes</h5>
                <p>Tes dilakukan oleh tim psikologi AIS. Tes ini bertujuan untuk mengetahui minat, bakat, dan karakter para calon siswa/siswi dan sebagai pertimbangan bagi para guru dalam melakukan proses pendidikan. Jadwal psikotes akan diinformasikan melalui kontak informasi orang tua/siswa yang telah terdaftar.</p>
                <h5 class="fw-600 mt-50">Langkah 5: Melakukan Registasi Ulang</h5>
                <p>Ananda yang telah mendaftar dan lolos psikotes atau seleksi beasiswa akan mendapatkan pemberitahuan untuk melakuakn registrasi ulang. Berikut adalah data yang harus dilengkapi pada saat registrasi ulang:</p>
                <ol class="list-show">
                    <li>Formulir registrasi dapat di unduh di sini:<br>
                     <a href="{{asset('assets/img/reg-form-primary.pdf')}}" class="btn btn-light">Formulir SD</a>
                     <a href="{{asset('assets/img/reg-form-secondary.pdf')}}" class="btn btn-light">Formulir SMP-SMA</a>
                    </li>
                    <li>Scan / Fotokopi ijazah terakhir</li>
                    <li>Pas foto ukuran 3 x 4</li>
                    <li>Scan/fotokopi akte lahir</li>
                    <li>Scan/fotokopi kartu keluarga</li>
                    <li>Scan / Fotokopi penghargaan yang pernah diperoleh</li>
                    <li>Bukti pelunasan dana investasi pendidikan</li>
                </ol>
                <p>Para siswa/siswi yang telah melakukan registrasi ulang akan mendapatkan nomor induk siswa dan mendapatkan perlengkapan sekolah (seragam, tas, buku, dll)</p>
            </div>
            <div class="col-sm-3">
                @include('front.component.consultan')
                @include('front.component.pendaftaran_menu')
            </div>
        </div>
    </div>
</section>
@endsection