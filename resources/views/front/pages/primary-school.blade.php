@extends('layouts.frontapp', ['title' => 'Primary School (SD/MI)'])

@section('content')
    <section class="header-page" style="background-image:url({{asset('assets/img/ais-primary-top.jpg')}})">
        <div class="container">
            <h1 class="center-text fw-600 lt-2 mb-10">PRIMARY SCHOOL (SD/MI)</h1>
        </div>
    </section>
    <section class="pages-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <p class="italic">
                    “Dan perintahkanlah keluargamu melaksanakan shalat dan sabar dalam mengerjakannya. Kami tidak meminta rizki kepadamu, Kami-lah yang memberi rizki kepadamu. Dan akibat (yang baik di akhirat) adalah bagi orang yang bertaqwa.”
                    </p>
                    <p>[Q.S. Thaahaa : 132]</p>
                    <p>AIS Primary School, merupakan sekolah dasar Islam. Kami berusaha menyajikan kurikulum pembelajaran yang tepat sesuai dengan perkembangan anak usia sekolah dasar (6 – 13 tahun) untuk membentuk siswa dan siswi menjadi pribadi yang unggul dengan menanamkan dasar-dasar Islam yang kokoh dan ilmu pengetahuan yang luas, meliputi Pendidikan dan pembiasaan adab dan akhlak Islam; Pendidikan tauhid dan ibadah; Tahfidz Qur’an; Peningkatan ilmu pengetahuan yang luas; Pembiasaan belajar mandiri dan keahlian berpikir kritis; Pembentukan kreativitas dan jiwa kepemimpinan.</p>
                </div>
                <div class="col-sm-3">
                    @include('front.component.program_menu')
                </div>                
            </div>
        </div>
    </section>
    <section>
        <div id="carouselExampleCaptions" class="carousel slide relative" data-bs-ride="carousel">
            <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
                <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
                ></button>
                <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="1"
                aria-label="Slide 2"
                ></button>
                <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="2"
                aria-label="Slide 3"
                ></button>
            </div>
            <div class="carousel-inner relative w-full overflow-hidden">
                <div class="carousel-item active relative float-left w-full">
                <img
                    src="{{asset('assets/img/slider4.jpg')}}"
                    class="block w-full"
                    alt="..."
                />
                </div>
                <div class="carousel-item relative float-left w-full">
                <img
                    src="{{asset('assets/img/Prestasi_final_hongkong_math_olympiad.jpg')}}"
                    class="block w-full"
                    alt="..."
                />
                </div>
                <div class="carousel-item relative float-left w-full">
                <img
                    src="{{asset('assets/img/al-lathif-islamic-school-1-3.jpg')}}"
                    class="block w-full"
                    alt="..."
                />
                </div>
            </div>
            <button
                class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev"
            >
                <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next"
            >
                <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
    </section>
    <section class="mt-50 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h3 class="fw-600 mb-30">Tahfidz Qur'an & Islamic Education</h3><hr>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-9">
                    <p class="">Ditingkat sekolah dasar, para siswa – siswi akan dibiasakan untuk menjalankan kehidupan Islami dari mulai masuk sampai pulang sekolah. Ketika tanda masuk sekolah berbunyi (06.30 WIB) para siswa – siswi akan diarahkan ke masjid untuk memulai kegiatan Tahfidz Qur’an dengan bimbingan para ustadz/ustadzah yang dipimpin langsung oleh K.H. Amir Hamzah Al Hafidz. Sebagai pelatih Qori nasional beliau senantiasa menjaga bacaan Al Qur’an yang dihafal para murid sesuai dengan kaidah bacaan yang benar. Kegiatan hafalan Qur’an pagi akan berakhir saat pelaksanaan shalat dhuha (07.45). Selanjutnya mereka akan melakukan line-up motivation untuk mengecek kesiapan siswa dan menanamkan nilai-nilai Islam.</p>
                    <p>Para siswa-siswi akan kembali ke masjid ketika adzan dzuhur berkumandang. Seluruh siswa-siswi, guru, dan staff sekolah akan melaksanakan shalat berjamaah. Para siswa-siswi akan melanjutkan kegiatan tahfidz selama 40 menit. Kegiatan ini akan berulang ketika shalat Ashar. Target hafalan Qur’an untuk tingkat primary school adalah 5 juz.</p>
                    <p>Pembelajaran aqidah, akhlak, fiqih, dan sirah memiliki jadwal tersendiri dalam kurikulum. Hasil dari pembelajaran tersebut dibiasakan untuk diimplementasikan dalam kehidupan sehari-hari.</p>
                    <p>Lihat gambaran kegiatan harian siswa sekolah dasar selengkapnya pada <a href="{{route('home')}}/primary-school-life" class="btn btn-light">KEHIDUPAN SISWA</a>   </p>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-50 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h3 class="fw-600 mb-30">Belajar Al Qur'an Bersama Syaikh Palestina</h3><hr>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-9">
                    <p class="">Kemampuan dalam membaca Al Quran dengan benar merupakan kunci dalam menghafalkan Al Qur’an. Para murid di AIS akan mempelajari dasar-dasar membaca Al Qur’an (makhorizul huruf dan tajwid)  langsung bersama para syaikh dari Gaza, Palestina yang telah memiliki sanad Al Qur’an sejak kelas 2 SD (Grade 2). Dengan ini diharapkan para murid dapat menghafalkan Al Qur’an dengan bacaan yang benar (fasih).</p>
                    <p>Pembalajaran dengan syaikh dilanjutkan dengan setoran hafalan Al Qur’an (tasmi’ dan talaqi) serta ujian sanad Al Qur’an</p>
                   
                </div>
            </div>
        </div>
    </section>
    <section class="mt-50 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h3 class="fw-600 mb-30">Pembentukan Adab dan Karakter</h3><hr>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-9">
                    <p class="">Adab sangatlah penting untuk dikenalkan kepada anak sedari dini karena merupakan bagian dari pendidikan untuk menunjang pembentukan kepribadian anak. Imam Malik rahimahullah pernah berkata pada seorang pemuda Quraisy, “Pelajarilah adab sebelum mempelajari suatu ilmu.”</p>
                    <p>Hilangnya adab dan rusaknya akhlak akan menjadi bencana besar dalam kehidupan, baik di dunia maupun di akhirat. Oleh karena itu, di AIS pendidikan adab ini menjadi salah satu komponen utama dalam pendidikan sekolah.</p>
                   
                </div>
            </div>
        </div>
    </section>
    <section class="mt-50 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h3 class="fw-600 mb-30">Kurikulum Internasional</h3><hr>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-9">
                    <p class="">Untuk memperluas pengetahuan siswa, AIS menggunakan kurikulum internasional (Cambridge Primary Program). Melalui program ini memberikan pengalama kepada siswa-siswi AIS kurikulum kelas dunia untuk mengembangkan keterampilan dan pemahaman dalam mata pelajaran bahasa Inggris, matematika, dan sains.</p>
                    <p><a href="{{route('home')}}/primary-school-curriculum">Selengkapnya >></a></p>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-50 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h3 class="fw-600 mb-30">Bahasa</h3><hr>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-9">
                    <p class="">Ketika anda berkeliling di sekolah Al Lathif, anda akan mendengar ucapan pertemuan yang paling baik,</p>
                    <p class="italic">Assalamualaikum Warahmatullahi Wabarakatuh</p>
                    <p>(Semoga kedamaian dilimpahkan kepadamu diiringi dengan rahmat dari Allah dan juga barakah dari Allah untukmu).</p>
                    <p>Sebuah ucapan keselamatan sekaligus doa dalam setiap pertemuan. Pembicaraan dalam Bahasa Inggris dan Bahasa Indonesia antar siswa, guru, dan staff sekolah akan terdengar dalam aktivitas sekolah.</p>
                    <p>Pada saat proses pembelajaran di dalam kelas, bahasa pengantar yang digunakan adalah Bahasa Inggris. Namun, tidak menutup kemungkinan guru akan menjelaskan kembali dalam bahasa yang dimengerti oleh siswa.</p>
                    <p>“Berbicaralah kepada manusia sesuai dengan kadar (takaran kemampuan) akal mereka.” (HR. Muslim)</p>
                    <p>Bahasa Arab diajarkan untuk membiasakan murid dapat memahami Al Qur’an dan kitab-kitab Islam. Bahasa Arab juga digunakan ketika para murid beromunikasi dengan para Syaikh.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-50 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h3 class="fw-600 mb-30">Ekstrakurikuler</h3><hr>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-9">
                    <p>Kami meyakini bahwa setiap anak itu cerdas baik dalam satu bidang maupun dalam beberapa bidang keilmuan. Oleh karena itu, sekolah memfasilitasi agar para murid dapat mencoba beragam kegiatan. Dengan begitu, mereka akan memiliki pengalaman yang kaya. Walaupun demikian kami senantiasa mengarahkan para siswa/siswi untuk menekuni kegiatan yang disunnahkan oleh Rasulullah saw, yaitu beladiri, berenang, dan memanah</p>
                    <div class="row">
                        <div class=" col-sm-3 col-xs-6">
                            <center>
                                <img src="{{asset('assets/img/01-scout.png')}}" alt="" class="thumbnail">
                                <h5 class="text-center fw-500 mt-20 mb-20">PRAMUKA</h5>
                            </center>
                        </div>
                        <div class=" col-sm-3 col-xs-6">
                            <center>
                                <img src="{{asset('assets/img/02-martial-art.png')}}" alt="" class="thumbnail">
                                <h5 class="text-center fw-500 mt-20 mb-20">SILAT</h5>
                            </center>
                        </div>
                        <div class=" col-sm-3 col-xs-6">
                            <center>
                                <img src="{{asset('assets/img/03-robotic.png')}}" alt="" class="thumbnail">
                                <h5 class="text-center fw-500 mt-20 mb-20">ROBOTIK</h5>
                            </center>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <center>
                                <img src="{{asset('assets/img/04-swimming.png')}}" alt="" class="thumbnail">
                                <h5 class="text-center fw-500 mt-20 mb-20">BERENANG</h5>
                            </center>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <center>
                                <img src="{{asset('assets/img/05-astronomy.png')}}" alt="" class="thumbnail">
                                <h5 class="text-center fw-500 mt-20 mb-20">ASTRONOMI</h5>
                            </center>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <center>
                                <img src="{{asset('assets/img/06-archery.png')}}" alt="" class="thumbnail">
                                <h5 class="text-center fw-500 mt-20 mb-20">MEMANAH</h5>
                            </center>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <center>
                                <img src="{{asset('assets/img/09-angklung.png')}}" alt="" class="thumbnail">
                                <h5 class="text-center fw-500 mt-20 mb-20">ANGKLUNG</h5>
                            </center>
                        </div>
                        <div class=" col-sm-3 col-xs-6">
                            <center>
                                <img src="{{asset('assets/img/10-qiroat.png')}}" alt="" class="thumbnail">
                                <h5 class="text-center fw-500 mt-20 mb-20">QIROAT</h5>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection