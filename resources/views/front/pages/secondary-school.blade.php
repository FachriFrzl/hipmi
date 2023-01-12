@extends('layouts.frontapp', ['title' => 'Secondary School (SMP-SMA)'])

@section('content')
    <section class="header-page" style="background-image:url({{asset('assets/img/ais_6.jpg')}})">
        <div class="container">
            <h1 class="center-text fw-600 lt-2 mb-10">SECONDARY SCHOOL (SMP-SMA)</h1>
        </div>
    </section>
    <section class="pages-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 scroll-element js-scroll slide-left">
                    <p>AIS Secondary School merupakan sekolah Islam untuk tingkat SMP dan SMA (Kelas VII – XII). AIS bertujuan untuk menyediakan pendidikan yang berfokus pada pendidikan Islam dan Qur’an sebagai way of life serta membekali mereka dengan ilmu pengetahuan dan keahlian global sebagai memenuhi peran mereka sebagai Khalifah di muka bumi sesuai dengan tujuan penciptaan manusia sebagaimana firman Allah:</p>
                    <p>“Dan (ingatlah) ketika Tuhanmu berfirman kepada para malaikat,’Aku hendak menjadikan khalifah di muka bumi’. …” (Q.S. Al Baqarah: 30)</p>
                    <p>Kami juga menyadari bahwa usia sekolah SMP dan SMA merupakan usia remaja yang energik dan memiliki rasa ingin tahu yang tinggi, AIS menyediakan pendidikan leadership, entrepreneurship dan juga memfasilitasi mereka untuk meraih prestasi baik akademik, olahraga, maupun kegiatan lain dalam ekstrakurikuler.</p>
                </div>
                <div class="col-sm-3 scroll-element js-scroll slide-right">
                    @include('front.component.program_menu')
                </div>
            </div>    
        </div>
    </section>
    <section>
        <div class="container">
            <div class='line-after mt-50'><h3><span class="text-lineafter fw-600">PENDIDIKAN ISLAM</span></h3><div>
            <div class="row mt-30">
                    <div class="col-sm-8 scroll-element js-scroll slide-left">
                        <p>Sejarah telah membuktikan bagaiman Islam dapat menciptakan peradaban yang begitu agung yang melahirkan tokoh-tokoh gemilang dalam berbagai bidang yang menghasilkan karya-karya yang bermanfaat bagi umat manusia. Generasi yang memegang teguh Al Qur’an dan Sunnah Nabi Muhammad Saw sebagai pedoman hidup mereka.</p>
                        <p>AIS berusaha menyediakan program pendidikan untuk menjadi bagian dalam menciptakan generasi-generasi unggul untuk mencapai kembali kejayaan Islam yang telah Allah janjikan dengan cara menyediakan para pengajar yang kompeten dan sumber-sumber belajar yang baik. Para murid AIS akan mempelajari berbagai kitab karya para ulama terdahulu untuk mengokohkan tauhid Islam ahlussunah wal jamaah, membentuk insan yang akhlak mulia, memantapkan ibadah dan muamalah, dan mengambil berbagai pelajaran terbaik dari sirah nabawiyah.</p>
                        <p>Proses pendidikan Islam di AIS juga dilakukan dengan melakukan pembiasaan kehidupan Islami di sekolah dan amalan yaumiyah yang dikontrol melalui buku mutaba’ah</p>
                    </div>
                    <div class="col-sm-4 primary-img-bg scroll-element js-scroll slide-right" style="background-image:url({{asset('assets/img/allathif-wisuda.jpg')}})"></div>
                </div>
            </div>
    </section>
    <section>
        <div class="container">
            <div class='line-after mt-50'><h3><span class="text-lineafter fw-600">TAHFIDZ AL QUR'AN</span></h3><div>
            <div class="row mt-30">
                    <div class="col-sm-4 primary-img-bg scroll-element js-scroll slide-left" style="background-image:url({{asset('assets/img/al-lathif-student.jpg')}})"></div>
                    <div class="col-sm-8 scroll-element js-scroll slide-right">
                        <p>Program Tahfidz Qur’an dilaksanakan setiap hari (Senin-Sabtu) dalam 3 sesi setiap harinya, yaitu pagi mulai pukul 06.30 sampai dengan pukul 07.50 (menjelang dhuha), siang ba’da dzuhur selama 40 menit dan sore (ba’da ashar) selama 40 menit. Program tahfidz ini akan diajarkan oleh para ustadz yang sudah hafidz dan akan dimonitoring oleh para ulama hafidz yang telah mendapatkan ijazah dengan sanad yang nyambung hingga Rasulullah Saw.</p>
                        <p>Qiroat diajarkan untuk mendukung program tahfidz dan untuk mempersiapkan mereka untuk menjadi imam. Pendidikan qiraat ini dibimbing langsung oleh K.H. Amir Hamzah. Sebagai pelatih Qori nasional beliau senantiasa menjaga bacaan Al Qur’an yang dihafal para murid sesuai dengan kaidah bacaan yang benar.</p>
                        <p>Pada saat kelas XI diharapkan para siswa – siswi telah menyelesaikan hafalan Qur’an dan 30 juz secara mutqin dan dapat melanjutkan untuk proses pengambilan sanad Al Qur’an.</p>
                    </div>
                </div>
            </div>
    </section>
    <section>
        <div class="container">
            <div class='line-after mt-50'><h3><span class="text-lineafter fw-600">BELAJAR BERSAMA SYAIKH PALESTINA</span></h3><div>
            <div class="row mt-30">
                    <div class="col-sm-8 scroll-element js-scroll slide-left">
                        <p>AIS bekerja sama dengan lembaga Dar Al Qur’an Wa Sunnah, Gaza Palestina untuk menyelenggarakan program pendidikan Al Qur’an dan Dauroh Islam yang bersanad di Indonesia. Dengan adanya kerjasama ini, para murid AIS dapat belajar langsung dengan para syaikh dalam belajar Al Qur’an dan mengkaji ilmu-ilmu Islam.</p>
                        <p>Kami menyadari bahwa tidak semua murid yang masuk ke SMP Al Lathif adalah lulusan dari sekolah Islam (Pesantren). Untuk itu, pada semester awal masuk ke SMP Al Lathif para murid akan mendapatkan bimbingan membaca Al Qur’an (Belajar makhorizul huruf dan tajwid) secara intensif bersama para syaikh dan ustadz. Dengan ini diharapkan para murid dapat menghafalkan Al Qur’an dengan bacaan yang benar (fasih). Hal ini ini penting dilakukan agar para murid dapat menghafal Al Qur’an dengan bacaan yang benar.</p>
                        <p>Pembalajaran dengan syaikh dilanjutkan dengan setoran hafalan Al Qur’an (tasmi’ dan talaqi) serta ujian sanad Al Qur’an.</p>
                    </div>
                    <div class="col-sm-4 primary-img-bg scroll-element js-scroll slide-right" style="background-image:url({{asset('assets/img/al-lathif-islamic-school-bandung-syaikh-palestina.jpg')}})"></div>
                </div>
            </div>
    </section>
    <section>
        <div class="container">
            <div class='line-after mt-50'><h3><span class="text-lineafter fw-600">INTERNASIONAL KURIKULUM</span></h3><div>
            <div class="row mt-30">
                    <div class="col-sm-4 primary-img-bg scroll-element js-scroll slide-left" style="background-image:url({{asset('assets/img/allathif-secondary.jpg')}})"></div>
                    <div class="col-sm-8 scroll-element js-scroll slide-right">
                        <p>Pendidikan menengah biasanya dimulai untuk sebagian besar siswa pada usia 12 atau 13 tahun dan diakhiri dengan siswa mengambil ujian Cambridge IGCSE yang diakui secara internasional. Selama tiga tahun pertama (Sekolah Menengah Pertama) siswa akan mempelajari berbagai mata pelajaran seperti Matematika, Sains, Bahasa Inggris, dll. Setelah mereka lulus dari SMP, mereka masuk ke SMA 2 tahun Fase sekunder yang mempersiapkan mereka untuk IGCSE.</p>
                        <p>Kurikulum ini digunakan oleh lebih dari 10.000 sekolah di 160 negara di dunia sehingga para murid Al Lathif memiliki standard keilmuan yang sama dengan berbagai sekolah di seluruh dunia yang menggunakan standar kurikulum tersebut. Dengan ini, para murid dapat mengerjakan project bersama dengan para siswa dari sekolah laindi beberapa negara lain yang telah bermitra dengan AIS melalui program AIS Cross-country Learning Program.</p>
                        <a href="" class="btn btn-light">Lihat Kurikulum SMP-SMA</a>
                    </div>
                </div>
            </div>
    </section>
    <section>
        <div class="container">
            <div class='line-after mt-50'><h3><span class="text-lineafter fw-600">LEADERSHIP & ENTERPRENEURSHIP</span></h3><div>
            <div class="row mt-30">
                    <div class="col-sm-8 scroll-element js-scroll slide-left">
                        <p>Kemampuan leadership dan Enterpreneurship perlu dibentuk sejak muda melalui proses pendidikan yang terintegrasi untuk menciptakan para pemimpin masa depan yang tangguh, kreatif, dan amanah dengan mengedepankan aspek akhlakul karimah</p>
                        <p>Seperti Nabi Muhammad SAW, sejak umur 12 tahun beliau terlibat dalam perang Fijar yang dilakukan oleh orang-orang Quraisy, beliau berperan dalam kelancaran pasokan senjata bagi pasukan yang berperang. Tidak hanya itu, pada fase ini tepatnya usia 12 tahun, Nabi Muhammad SAW, juga telah mulai diajak berdagang oleh pamannya Abu Thalib ke negeri Syam. Dengan berdagang berarti Nabi telah belajar mengenai pengelolaan keuangan, mengamalkan kejujuran dan keadilan dalam berdagang, menjalin komunikasi dan interaksi dengan orang lain dan tentu saja belajar mengenai prinsip-prinsip bisnis lainnya.</p>
                        <p>Para murid AIS akan dibimbing untuk mengembangkan keahlian leadership & enterpreneurship. Insya Allah akan dibina oleh para pebisnis muslim.</p>
                    </div>
                    <div class="col-sm-4 primary-img-bg scroll-element js-scroll slide-right" style="background-image:url({{asset('assets/img/islamic_school_enterpreneurship.jpg')}})"></div>
                </div>
            </div>
    </section>
    <section>
        <div class="container">
            <div class='line-after mt-50'><h3><span class="text-lineafter fw-600">BAHASA</span></h3><div>
            <div class="row mt-30">
                    <div class="col-sm-4 primary-img-bg scroll-element js-scroll slide-left" style="background-image:url({{asset('assets/img/al-lathif-islamic-school-1-2.jpg')}})"></div>
                    <div class="col-sm-8 scroll-element js-scroll slide-right">
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
    <section>
        <div class="container">
            <div class='line-after mt-50'><h3><span class="text-lineafter fw-600">MASTER CLASS DAY</span></h3><div>
            <div class="row mt-30">
                    <div class="col-sm-8 scroll-element js-scroll slide-left">
                        <p>Kami meyakini bahwa ketika anak memiliki potensi yang berbeda-beda sesuai dengan minat dan bakatnya. Penelitian menunjukan bahawa mayoritas siswa akan belajar secara maksimal ketika mempelajari sesuatu sesuai dengan minta dan bakatnya. Oleh karena itu, AIS bersama siswa dan orang tua berusaha menggali minat dan bakat setiap siswa dan memaksimalkannya dalam kegiatan di sekolah.</p>
                        <p>Satu hari pada setiap minggunya para murid dapat memilih belajar sesuai dengan minat dan bakatnya dan dibimbing oleh guru bidang studi yang kompeten baik dari dalam maupun luar negeri. Tujuannya adalah para murid dapat lebih termotivasi untuk belajar dan meningkatkan kompetensi sesuai dengan minat mereka dengan metode belajar yang menyenangkan sesuai dengan karakteristik pelajaran tersebut.</p>
                        <p>Alhamdulillah dengan metode seperti ini AIS dapat meraih prestasi dalam berbagai kompetisi baik di dalam maupun luar negeri.</p>
                    </div>
                    <div class="col-sm-4 primary-img-bg scroll-element js-scroll slide-right" style="background-image:url({{asset('assets/img/ais_upper_secondary_school.jpg')}})"></div>
                </div>
            </div>
    </section>
    <section>
        <div class="container">
            <div class='line-after mt-50'><h3><span class="text-lineafter fw-600">POTENSI MENJASI PRESTASI</span></h3><div>
            <div class="row mt-30">
                    <div class="col-sm-4 primary-img-bg scroll-element js-scroll slide-left" style="background-image:url({{asset('assets/img/memanah.jpg')}})"></div>
                    <div class="col-sm-8 scroll-element js-scroll slide-right">
                        <p>Sekolah Al Lathif berusaha memfasilitasi agar para murid dapat mencoba beragam kegiatan dan kempetisi. Dengan begitu, mereka akan memiliki pengalaman yang kaya.</p>
                        <p>Untuk kegiatan ekstrakurikuler kami senantiasa mengarahkan para siswa/siswi untuk menekuni kegiatan yang disunnahkan oleh Rasulullah saw, yaitu beladiri, berenang, memanah, dan berkuda.</p>
                        <p>Untuk pengembangan keahlian berorganisasi kegiatan OSIS dan juga Pramuka merupakan kegiatan yang wajib diikuti oleh setiap siswa.</p>
                    </div>
                </div>
            </div>
    </section>
    <section class="mb-50">
        <div class="container">
            <div class='line-after mt-50'><h3><span class="text-lineafter fw-600">PROGRAM KHUSUS & KEPESANTRENAN</span></h3><div>
            <div class="row mt-30">
                    <div class="col-sm-8 scroll-element js-scroll slide-left">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Tahfidz Plus</button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Tahfidz Plus Pesantren</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                                <p class="mt-30">Program belajar di sekolah secara full day dari mulai pukul 06.30 WIB sampai dengan pukul 16.00 WIB.</p>
                                <a href="{{route('home')}}/secondary-school-life" class="btn btn-light">Lihat Kehidupan Sekolah</a>
                                <p class="mt-30">Setelah pukul 16.00 WIB para siswa/siswi akan pulang ke rumah masing-masing. Kegiatan murajaah malam dan ba’da subuh serta kegiatan amal yaumiyah yang dilaksanakan di rumah akan dibimbing oleh orang tua.</p>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                                <p class="mt-30">Pada program ini para murid akan mengikuti program tahfidz plus ditambah dengan program kepesantrenan. Para murid akan tinggal (mondok) di lingkungan pesantren dan akan dibimbing oleh para ustadz untuk mempelajari ilmu-ilmu agama Islam secara lebih mendalam.</p>
                                <p>Lihat penjelasan selengkapnya pada <a href="{{route('home')}}/pesantren" class="btn btn-light">Pesantren Al Lathif</a> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 primary-img-bg scroll-element js-scroll slide-right" style="background-image:url({{asset('assets/img/ais-syaikh-pesantren.jpg')}})"></div>
                </div>
            </div>
    </section>

@endsection