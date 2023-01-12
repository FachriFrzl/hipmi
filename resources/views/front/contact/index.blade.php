@extends('layouts.frontapp', ['title' => 'Kontak'])

@section('content')
<section class="header-page" style="background-image:url({{asset('assets/img/contact-us.jpg')}})">
        <div class="container">
            <h1 class="center-text fw-600 lt-2 mb-10">HUBUNGI KAMI</h1>
        </div>
    </section>
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-300">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="header-contact mb-50 mt-50">
                    <h3 class="fw-600 text-center">KIRIM PESAN</h3>
                    <img src="{{asset('assets/img/bottom-heading.png')}}" alt="" class="title-contact-icon">
                </div>
                <form action="{{ route('front.contact.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label class="text-gray-700" for="name">NAMA LENGKAP</label>
                            <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="name" value="{{ old('name') }}" placeholder="Full Name">
                            @error('name')
                                <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                    <div class="px-4 py-2">
                                        <p class="text-gray-600 text-sm">{{ $message }}</p>
                                    </div>
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label class="text-gray-700" for="namep">NAMA PERUSAHAAN</label>
                            <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="namep" value="{{ old('namep') }}" placeholder="Company Name">
                            @error('namep')
                                <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                    <div class="px-4 py-2">
                                        <p class="text-gray-600 text-sm">{{ $message }}</p>
                                    </div>
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label class="text-gray-700" for="telp">NO TELP.</label>
                            <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="telp" value="{{ old('telp') }}" placeholder="No. Telepon">
                            @error('telp')
                                <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                    <div class="px-4 py-2">
                                        <p class="text-gray-600 text-sm">{{ $message }}</p>
                                    </div>
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label class="text-gray-700" for="email">EMAIL</label>
                            <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="email" name="email" value="{{ old('email') }}" placeholder="Email Address">
                            @error('email')
                                <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                    <div class="px-4 py-2">
                                        <p class="text-gray-600 text-sm">{{ $message }}</p>
                                    </div>
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label class="text-gray-700" for="message">PESAN</label>
                            <textarea class="w-full mt-2 rounded-md bg-gray-200 focus:bg-white" name="message" rows="7">{{ old('message') }}</textarea>
                            @error('message')
                                <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                    <div class="px-4 py-2">
                                        <p class="text-gray-600 text-sm">{{ $message }}</p>
                                    </div>
                                </div>
                            @enderror
                        </div>
                        <div class="flex justify-start mt-4">
                            <button type="submit" class="px-4 py-2 bg-gray-600 text-gray-200 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">KIRIM</button>
                        </div>
                    </form>
            </div>
            <div class="col-md-6">
                <div class="header-contact mb-50 mt-50">
                    <h3 class="fw-600 text-center">TETAP TERKONEKSI</h3>
                    <img src="{{asset('assets/img/bottom-heading.png')}}" alt="" class="title-contact-icon">
                </div>
                    <p>Kami berharap penjelajahan Anda di website {{route('home')}} dapat memberikan informasi yang cukup mengenai HIPMI Kota Cimahi. Apabila anda menginginkan informasi yang lebih lengkap, tim kami akan senang hati memberikan informasi yang anda perlukan.</p>
                    <h6 class="flex"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-1"><path stroke-linecap="round" stroke-linejoin="round" d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0l6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 014.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 00-.38 1.21 12.035 12.035 0 007.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 011.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 01-2.25 2.25h-2.25z" /></svg> Telepon:</h6>
                    <ul>
                        <li class="fw-600">021-5278869</li>
                    </ul>
                    <h6 class="flex"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-1"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" /></svg> Email:</h6>
                    <ul>
                        <li class="fw-600">sekretariat.hipmijaya@gmail.com</li>
                    </ul>
                    <h6 class="flex"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"> <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" /></svg> Alamat:</h6>
                    <ul>
                        <li class="fw-600">Jalan Bakti I No. 5, South Jakarta 12160 - INDONESIA</li>
                    </ul>
            </div>
        </div>
        
    </div>
    <h5 class="fw-600 text-center mt-30"><u>Peta Lokasi Sekretariat</u></h5>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d495.7791162301451!2d106.81279000000002!3d-6.232995000000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6afd6d14ca53c63e!2zNsKwMTMnNTguOCJTIDEwNsKwNDgnNDYuMCJF!5e0!3m2!1sen!2sus!4v1672160160865!5m2!1sen!2sus" width="1600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</main>
<script>
        @if(session()->has('success'))

        Swal.fire({
            icon: 'success',
            title: 'BERHASIL!',
            text: '{{ session('success') }}',
            showConfirmButton: false,
            timer: 3000
        })

        @elseif(session()->has('error'))

        Swal.fire({
            icon: 'error',
            text: 'GAGAL!',
            title: '{{ session('error') }}',
            showConfirmButton: false,
            timer: 3000
        })

        @endif
    </script>
@endsection
