@extends('layouts.frontapp', ['title' => 'Daftar Siswa Baru'])

@section('content')
<section class="header-page" style="background-image:url({{asset('assets/img/ais_6.jpg')}})">
        <div class="container">
            <h1 class="center-text fw-600 lt-2 mb-10">FORM PENDAFTARAN MURID BARU</h1>
        </div>
    </section>

<section>
    <div class="container mt-50 mb-50">
        <div class="row">
            <div class="col-sm-9">
                <h3 class="text-center fw-600">FORMULIR PENDAFTARAN</h3>
                <p>Terima kasih telah memilih Al Lathif Islamic School menjadi pilihan pendidikan Ananda. Silahkan mengisi formulir pendaftaran berikut secara lengkap!</p>
                <form action="{{ route('front.formdaftar.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="row">
                    <div class="col-md-6 mt-4">
                        <label class="text-gray-700" for="image">PAS FOTO</label>
                        <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white p-3" type="file" name="image">
                        @error('image')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-6 mt-4">
                        <div>
                            <label class="text-gray-700" for="image">KELAS / PROGRAM</label>
                            <select class="w-full border bg-gray-200 focus:bg-white rounded px-3 py-2 outline-none" aria-label=".form-select-sm example" name="grade_need">
                                <option selected>Pilih Kelas yang Diperlukan</option>
                                <option value="NURSERY">NURSERY</option>
                                <option value="PREKINDERGARTEN">PREKINDERGARTEN</option>
                                <option value="KINDERGARTEN">KINDERGARTEN</option>
                                <option value="GRADE 1">GRADE 1</option>
                                <option value="GRADE 2">GRADE 2</option>
                                <option value="GRADE 3">GRADE 3</option>
                                <option value="GRADE 4">GRADE 4</option>
                                <option value="GRADE 5">GRADE 5</option>
                                <option value="GRADE 6">GRADE 6</option>
                                <option value="GRADE 7">GRADE 7</option>
                                <option value="GRADE 8">GRADE 8</option>
                                <option value="GRADE 9">GRADE 9</option>
                                <option value="GRADE 10">GRADE 10</option>
                                <option value="GRADE 11">GRADE 11</option>
                                <option value="GRADE 12">GRADE 12</option>
                                <option value="TAHFIDZ TAKHASUS">TAHFIDZ TAKHASUS</option>
                            </select>
                            @error('grade_need')
                                <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                    <div class="px-4 py-2">
                                        <p class="text-gray-600 text-sm">{{ $message }}</p>
                                    </div>
                                </div>
                            @enderror
                        </div>
                        <div class="mt-2">
                            <label class="text-gray-700" for="jalur_masuk">JALUR MASUK</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jalur_masuk" id="Umum" value="Umum" checked>
                                <label class="form-check-label" for="Umum">
                                    Umum
                                </label>
                            </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="jalur_masuk" id="Beasiswa" value="Beasiswa" >
                                <label class="form-check-label" for="Beasiswa">
                                    Beasiswa <a href="{{route('home')}}/beasiswa">Lihat informasi beasiswa</a>
                                </label>
                            </div>
                            @error('jalur_masuk')
                                <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                    <div class="px-4 py-2">
                                        <p class="text-gray-600 text-sm">{{ $message }}</p>
                                    </div>
                                </div>
                            @enderror
                        </div>

                    </div>
                    <di class="col-md-6 mt-4">
                        <label class="text-gray-700" for="name">NAMA LENGKAP CALON SISWA</label>
                        <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="name" value="{{ old('name') }}" placeholder="Full Name">
                        @error('name')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        @enderror
                    </di>
                    <di class="col-md-6 mt-4">
                        <label class="text-gray-700" for="id_number">NIK / NOMOR PASPOR</label>
                        <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="id_number" value="{{ old('id_number') }}" placeholder="ID Number or Passport">
                        @error('id_number')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        @enderror
                    </di>
                    <di class="col-md-6 mt-4">
                        <label class="text-gray-700" for="id_number">TEMPAT & TANGGAL LAHIR</label>
                        <div class="row">
                            <div class="col-md-7">
                                <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="birth_place" value="{{ old('birth_place') }}" placeholder="Place of birth">
                                @error('birth_place')
                                    <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                        <div class="px-4 py-2">
                                            <p class="text-gray-600 text-sm">{{ $message }}</p>
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-5">
                                <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white p-3" type="date" name="birth_date" value="{{ old('birth_date') }}">
                                @error('birth_date')
                                    <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                        <div class="px-4 py-2">
                                            <p class="text-gray-600 text-sm">{{ $message }}</p>
                                        </div>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        
                    </di>
                    <di class="col-md-6 mt-4">
                        <label class="text-gray-700" for="phone">NOMOR HANDPHONE CALON SISWA</label>
                        <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="phone" value="{{ old('phone') }}" placeholder="Phone Number">
                        @error('phone')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        @enderror
                    </di>
                    <div class="col-md-6 mt-4">
                        <label class="text-gray-700" for="address">ALAMAT CALON SISWA</label>
                        <textarea class="w-full mt-2 rounded-md bg-gray-200 focus:bg-white" name="address" rows="7">{{ old('address') }}</textarea>
                        @error('address')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        @enderror
                    </div>
                    <di class="col-md-6 mt-4">
                        <label class="text-gray-700" for="phone">NAMA SEKOLAH SEBELUMNYA</label>
                        <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="school_before" value="{{ old('school_before') }}" placeholder="School's Name Before">
                        @error('school_before')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        @enderror
                        <label class="text-gray-700 mt-4" for="school_class_before">KELAS SEBELUMNYA</label>
                        <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="school_class_before" value="{{ old('school_class_before') }}" placeholder="Grade">
                        @error('school_class_before')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        @enderror
                    </di>
                    <div class="col-md-6 mt-4">
                        <label class="text-gray-700" for="achievement">PRESTASI CALON SISWA (Jika ada)</label>
                        <textarea class="w-full mt-2 rounded-md bg-gray-200 focus:bg-white" name="achievement" rows="7">{{ old('achievement') }}</textarea>
                        @error('achievement')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6 mt-4">
                        <label class="text-gray-700" for="quran_memorized">AL QUR'AN YANG SUDAH DIHAFAL (Dalam Juz, jika ada)</label>
                        <textarea class="w-full mt-2 rounded-md bg-gray-200 focus:bg-white" name="quran_memorized" rows="7">{{ old('quran_memorized') }}</textarea>
                        @error('quran_memorized')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        @enderror
                    </div>
                    <br>
                    <hr>
                    <div class="col-md-6 mt-4">
                        <label class="text-gray-700" for="parent_name">NAMA ORANG TUA</label>
                        <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="parent_name" value="{{ old('parent_name') }}" placeholder="Parent name: father or mother">
                        @error('parent_name')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6 mt-4">
                        <label class="text-gray-700" for="parent_phone">NOMOR HANDPHONE ORANG TUA</label>
                        <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="parent_phone" value="{{ old('parent_phone') }}" placeholder="Parent's phone number">
                        @error('parent_phone')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        @enderror
                    </div>
                </div>


                <div class="flex justify-start mt-4">
                    <button type="submit" class="px-4 py-2 bg-gray-600 text-gray-200 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">SIMPAN</button>
                </div>
            </form>
            </div>
            <div class="col-sm-3"> @include('front.component.consultan')
                @include('front.component.pendaftaran_menu')</div>
        </div>
    </div>
</section>

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
