@extends('layouts.app', ['title' => 'Slider - Admin'])

@section('content')
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-300">
    <div class="container mx-auto px-6 py-8">

        <div class="p-6 bg-white rounded-md shadow-md">
            <h2 class="text-lg text-gray-700 font-semibold capitalize">UPLOAD TENTANG KAMI</h2>
            <hr class="mt-4">
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 gap-6 mt-4">
                    <div>
                        <label class="text-gray-700" for="image">GAMBAR</label>
                        <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white p-3" type="file" name="image">
                         <!-- @error('image') --> 
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm"></p>
                                </div>
                            </div>
                        <!-- @enderror --> 
                    </div>
                    <div>
                        <label class="text-gray-700" for="name">DESKRIPSI AWAL</label>
                        <textarea class="w-full mt-2 rounded-md bg-gray-200 focus:bg-white" name="description" rows="5">{{ old('description') }}</textarea>
                        <!-- @error('description') -->
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm"></p>
                                </div>
                            </div>
                        <!--@enderror-->
                    </div>
                    <div>
                        <label class="text-gray-700" for="name">DESKRIPSI LANJUTAN</label>
                        <textarea class="w-full mt-2 rounded-md bg-gray-200 focus:bg-white" name="description" rows="5">{{ old('description') }}</textarea>
                        <!-- @error('description') -->
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm"></p>
                                </div>
                            </div>
                        <!--@enderror-->
                    </div>
                    <div>
                        <label class="text-gray-700" for="name">MOTTO ID</label>
                        <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="button" value="{{ old('button') }}" placeholder="Tulis ID Motto">
                        <!--@error('button') -->
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        <!--@enderror-->
                    </div>
                    <div>
                        <label class="text-gray-700" for="name">DESKRIPSI MOTTO</label>
                        <textarea class="w-full mt-2 rounded-md bg-gray-200 focus:bg-white" name="description" rows="5">{{ old('description') }}</textarea>
                        <!-- @error('description') -->
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm"></p>
                                </div>
                            </div>
                        <!--@enderror-->
                    </div>
                    <div>
                        <label class="text-gray-700" for="image">GAMBAR VISI</label>
                        <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white p-3" type="file" name="image">
                         <!-- @error('image') --> 
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm"></p>
                                </div>
                            </div>
                        <!-- @enderror --> 
                    </div>
                    <div>
                        <label class="text-gray-700" for="name">VISI</label>
                        <textarea class="w-full mt-2 rounded-md bg-gray-200 focus:bg-white" name="description" rows="5">{{ old('description') }}</textarea>
                        <!-- @error('description') -->
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm"></p>
                                </div>
                            </div>
                        <!--@enderror-->
                    </div>
                    <div>
                        <label class="text-gray-700" for="image">GAMBAR MISI</label>
                        <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white p-3" type="file" name="image">
                         <!-- @error('image') --> 
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm"></p>
                                </div>
                            </div>
                        <!-- @enderror --> 
                    </div>
                    <div>
                        <label class="text-gray-700" for="name">MISI</label>
                        <textarea class="w-full mt-2 rounded-md bg-gray-200 focus:bg-white" name="description" rows="5">{{ old('description') }}</textarea>
                        <!-- @error('description') -->
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm"></p>
                                </div>
                            </div>
                        <!--@enderror-->
                    </div>
                </div>

                <div class="flex justify-start mt-4">
                    <button type="submit" class="px-4 py-2 bg-gray-600 text-gray-200 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">UPLOAD</button>
                </div>
            </form>
        </div>
        <br>
        <h4 class="">Daftar Tentang Kami</h4>
        <hr>
        @foreach($about as $item)
        <div class="card mb-3" style="max-width: 75%;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{asset('assets/img/tentang-kami.jpg')}}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Deskripsi Awal</h5>
                  <p class="card-text"><small class="text-muted"> {{$item -> deskripsi}}</small></p>
                  <h5 class="card-text"> Deskripsi Lanjutan</h5>
                  <p class="card-muted"><small class="text-muted">{{$item -> deskripsi_lanjutan}}</small></p>
                </div>
              </div>
            </div>
          </div>
          <button class="btn btn-danger" href="#">Hapus</button>
                
                          <!--  <div class="bg-red-500 text-white text-center p-3 rounded-sm shadow-md">
                                Data Belum Tersedia!
                            </div> -->
                    @endforeach
        <br>
        <br>
        <h4 class="">Daftar Visi</h4>
        <hr>
        <div class="card mb-3" style="max-width: 75%;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{asset('assets/img/visi-hipmic.png')}}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Visi</h5>
                  <p class="card-text"><small class="text-muted"> {{$item -> visi -> visi}}</small></p>
                </div>
              </div>
            </div>
          </div>
          <button class="btn btn-danger" href="#">Hapus</button>
    <br>
        <br>
        <h4 class="">Daftar Misi</h4>
        <hr>
        <div class="card mb-3" style="max-width: 75%;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{asset('assets/img/misi-hipmic.png')}}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Misi</h5>
                  <p class="card-text"><small class="text-muted"> {{$item -> misi -> misi}}</small></p>
                </div>
              </div>
            </div>
          </div>
          <button class="btn btn-danger" href="#">Hapus</button>
    </div>
</div>
</div>
</main>
<script>
    //ajax delete
    function destroy(id) {
        var id = id;
        var token = $("meta[name='csrf-token']").attr("content");

        Swal.fire({
            title: 'APAKAH KAMU YAKIN ?',
            text: "INGIN MENGHAPUS DATA INI!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'BATAL',
            confirmButtonText: 'YA, HAPUS!',
        }).then((result) => {
            if (result.isConfirmed) {
                //ajax delete
                jQuery.ajax({
                    url: `/admin/slider/${id}`,
                    data: {
                        "id": id,
                        "_token": token
                    },
                    type: 'DELETE',
                    success: function (response) {
                        if (response.status == "success") {
                            Swal.fire({
                                icon: 'success',
                                title: 'BERHASIL!',
                                text: 'DATA BERHASIL DIHAPUS!',
                                showConfirmButton: false,
                                timer: 3000
                            }).then(function () {
                                location.reload();
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'GAGAL!',
                                text: 'DATA GAGAL DIHAPUS!',
                                showConfirmButton: false,
                                timer: 3000
                            }).then(function () {
                                location.reload();
                            });
                        }
                    }
                });
            }
        })
    }
</script>
@endsection