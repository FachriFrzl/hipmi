<section class="home-testimoni">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-20 scroll-element js-scroll slide-left">
                <div id="testimonipendaftar" class="carousel slide" data-bs-ride="carousel">
                <h4>Testimoni</h4>
                <h1 class="home-news-title mb-20">Kata Mereka:</h1>
                <div class="carousel-inner">
                    @foreach($testimonies as $testimony)
                    <div class="carousel-item {{$loop->iteration == 1 ? 'active' : ''}}">
                    <p>{!! $testimony->content  !!}</p>
                    <div class="row align-items-center">
                        <div class="col-3"><img src="{{asset('/storage/testimonies/'.$testimony->image)}}" alt="{{ $testimony->name }}" class="img-testomoni"></div>
                        <div class="col-9"> <b>{{ $testimony->name }}</b><br>
                                        {{ $testimony->title }}<br><a href="{{$testimony->yt_link}}">Lihat Video >> </a></div>
                    </div>
                    </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonipendaftar" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonipendaftar" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
            </div>
            {{-- <div class="col-md-6 line-home-kerjasama scroll-element js-scroll slide-right">
                <div class="row home-kerjasama">
                    <div class="col-sm-4 col-xs-6">
                        <img src="{{asset('assets/img/logo-06.png')}}" alt="">
                    </div>
                    <div class="col-sm-4 col-xs-6">
                        <img src="{{asset('assets/img/logo-05.png')}}" alt="">
                    </div>
                    <div class="col-sm-4 col-xs-6">
                        <img src="{{asset('assets/img/logo-yayasan.png')}}" alt="">
                    </div>
                    <div class="col-sm-4 col-xs-6">
                        <img src="{{asset('assets/img/logo-02.png')}}" alt="">
                    </div>
                    <div class="col-sm-4 col-xs-6">
                        <img src="{{asset('assets/img/logo-04.png')}}" alt="">
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>