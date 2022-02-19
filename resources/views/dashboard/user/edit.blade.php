@extends('layouts.main')

@section('content')
<!-- component -->
<!-- This is an example component -->
<div>
  @include('dashboard.layouts.navbar')
  <div class="flex overflow-hidden bg-white pt-16">
    @include('dashboard.layouts.sidebar')
    <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
    <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
      <main class="pt-12 px-4">
        <!-- component -->
        <!-- This is an example component -->
        <div class="w-10/12">

          <div class="mb-6">
            <form action="/dashboard/user/{{ $user->username }}" method="post" enctype="multipart/form-data">
              @method('put')
              @csrf
              <div class="flex justify-center">
                <div class="mb-3 w-96">
                  <input type="hidden" name='old_user_image' id='old_user_image'
                    value="{{ $user->data->user_image }}" />
                  @if($user->data->user_image)
                  <div class="text-center">
                    <img src="{{ asset('storage/' . $user->data->user_image)}}"
                      class="rounded-lg w-24 mb-4 mx-auto preview-image" alt="{{'photo-' . $user->username }}" />
                  </div>
                  @else
                  <img src="https://ui-avatars.com/api/?name={{ $user->username }}"
                    class="rounded-lg w-24 mb-4 mx-auto preview-image" alt="" />
                  @endif
                  <div class="flex w-full items-center justify-center bg-grey-lighter">
                    <input type="file" name="user_image" id="user_image" onchange="previewImg()">
                  </div>
                  @error('user_image')
                  <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">
                      {{ $message }}
                  </p>
                  @enderror
                </div>
              </div>
              <div class="grid grid-cols-2 gap-4">
                <div class="mb-3">
                  <label for="nama_lengkap"
                    class="block mb-2 text-sm font-medium @error('nama_lengkap') text-red-700 @enderror ">Nama
                    Lengkap</label>
                  <input type="text" id="nama_lengkap" name="nama_lengkap"
                    class="@error('nama_lengkap') bg-red-50 border border-red-500 text-red-900 @enderror border border-blue-500 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                    placeholder="Bonnie Green" value="{{ $user->data->nama_lengkap }}">
                  @error('nama_lengkap')
                  <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">
                      {{ $message }}
                  </p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="nama_panggilan"
                    class="block mb-2 text-sm font-medium @error('nama_panggilan') text-red-700 @enderror ">Nama
                    Panggilan</label>
                  <input type="text" id="nama_panggilan" name="nama_panggilan"
                    class="@error('nama_panggilan') bg-red-50 border border-red-500 text-red-900 @enderror text-sm border border-blue-500 rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                    placeholder="Bonnie Green" value="{{ $user->data->nama_panggilan }}">
                  @error('nama_panggilan')
                  <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">
                      {{ $message }}
                  </p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="nim"
                    class="block mb-2 text-sm font-medium @error('nim') text-red-700 @enderror ">NIM</label>
                  <input type="text" id="nim" name="nim"
                    class="@error('alamat') bg-red-50 border border-red-500 text-red-900 @enderror text-sm border border-blue-500 rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                    placeholder="Bonnie Green" value="{{ $user->data->nim }}">
                  @error('nim')
                  <p class=" mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">
                      {{ $message }}
                  </p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="tanggal_lahir"
                    class="block mb-2 text-sm font-medium @error('tanggal_lahir') text-red-700 @enderror ">Tempat,
                    Tanggal Lahir</label>
                  <input type="text" id="tanggal_lahir" name="tanggal_lahir"
                    class="@error('tanggal_lahir') bg-red-50 border border-red-500 text-red-900 @enderror text-sm border border-blue-500 rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                    placeholder="Bonnie Green" value="{{ $user->data->tanggal_lahir }}">
                  @error('text')
                  <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">
                      {{ $message }}
                  </p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="alamat"
                    class="block mb-2 text-sm font-medium @error('alamat') text-red-700 @enderror ">Alamat
                    Sekarang</label>
                  <input type="text" id="alamat" name="alamat"
                    class="@error('alamat') bg-red-50 border border-red-500 text-red-900 @enderror text-sm border border-blue-500 rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                    placeholder="Bonnie Green" value="{{ $user->data->alamat }}">
                  @error('alamat')
                  <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">
                      {{ $message }}
                  </p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="no_hp" class="block mb-2 text-sm font-medium @error('noHp') text-red-700 @enderror ">No
                    Telp</label>
                  <input type="text" id="no_hp" name="no_hp"
                    class="@error('no_hp') bg-red-50 border border-red-500 text-red-900 @enderror text-sm border border-blue-500 rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                    placeholder="Bonnie Green" value="{{ $user->data->no_hp }}">
                  @error('no_hp')
                  <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">
                      {{ $message }}
                  </p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="email" class="block mb-2 text-sm font-medium @error('email') text-red-700 @enderror ">
                    Email</label>
                  <input type="email" id="email" name="email"
                    class="@error('name') bg-red-50 border border-red-500 text-red-900 @enderror text-sm border border-blue-500 rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                    placeholder="Bonnie Green" value="{{ $user->email }}" disabled>

                  <small class=" mt-2 text-red-600 dark:text-red-500"><span class="font-medium">
                      Email tidak bisa diedit
                  </small>
                </div>
                <div class="mb-3">
                  <label for="asal_sekolah"
                    class="block mb-2 text-sm font-medium @error('asal_sekolah') text-red-700 @enderror ">
                    Asal Sekolah</label>
                  <input type="text" id="asal_sekolah" name="asal_sekolah"
                    class="@error('asal_sekolah') bg-red-50 border border-red-500 text-red-900 @enderror text-sm border border-blue-500 rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                    placeholder="Bonnie Green" value="{{ $user->data->asal_sekolah }}">
                  @error('asal_sekolah')
                  <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">
                      {{ $message }}
                  </p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="motto"
                    class="block mb-2 text-sm font-medium @error('motto') text-red-700 @enderror ">Motto
                    Hidup</label>
                  <textarea id="motto" name="motto" rows="3"
                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-blue-500 rounded-md p-3 placeholder:p-3"
                    placeholder="you@example.com"> {{ $user->data->motto }}</textarea>
                  @error('motto')
                  <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">
                      {{ $message }}
                  </p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="pengalaman"
                    class="block mb-2 text-sm font-medium @error('pengalaman') text-red-700 @enderror ">Pengalaman
                    Organisasi</label>
                  <textarea id="pengalaman" name="pengalaman" rows="3"
                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-blue-500 rounded-md  p-3 placeholder:p-3"
                    placeholder="you@example.com">{{ $user->data->pengalaman }}</textarea>

                  @error('pengalaman')
                  <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">
                      {{ $message }}
                  </p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="motivasi"
                    class="block mb-2 text-sm font-medium @error('motivasi') text-red-700 @enderror ">
                    Motivasi Ikut Himatif</label>
                  <textarea id="motivasi" name="motivasi" rows="3"
                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-blue-500 rounded-md p-3 placeholder:p-3"
                    placeholder="you@example.com">{{ $user->data->motivasi }}</textarea>

                  @error('motivasi')
                  <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">
                      {{ $message }}
                  </p>
                  @enderror
                </div>
              </div>
              <div class="mb-8 px-8 py-3 bg-gray-50 text-right sm:px-6">
                <button type='submit'
                  class="inline-flex justify-center py-2 px-8 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
              </div>
            </form>
          </div>
        </div>
      </main>
    </div>
  </div>
</div>

<script>
  function previewImg() {
    const image = document.querySelector('#user_image');
    const imgPreview = document.querySelector('.preview-image');

    const ofReader = new FileReader();
    ofReader.readAsDataURL(image.files[0]);

    ofReader.onload = function(ofReader) {
      imgPreview.src = ofReader.target.result;
    }
  }
</script>

@endsection