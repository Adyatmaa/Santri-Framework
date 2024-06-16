@extends('layouts.santri')
@section('content')
    @foreach ($santri as $santri)
        <section>
            <div class="">
                <p class="text-lg font-medium text-slate-800">Howdy, {{ auth()->user()->nama }}</p>
                <p class="text-xs font-normal text-slate-500">Nim • {{ $santri->nim }}</p>
            </div>
        </section>
        <section class="my-6">
            <div class="grid grid-rows-6 gap-6 lg:grid-cols-3">
                {{-- Card Absensi --}}
                @foreach ($jadwal as $item)
                    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow">
                        <h5 class="mb-4 text-base font-medium tracking-tight text-gray-900 text-start">{{ $item->waktu }}
                        </h5>
                        <div class="mb-4">
                            <!-- Modal toggle -->
                            <button data-modal-target="absen-modal" data-modal-toggle="absen-modal"
                                class="block text-white bg-emerald-200 hover:bg-emerald-300 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm px-5 py-2.5 w-full text-left"
                                type="button" data-jadwal-id="{{ $item->id }}" data-ruang="{{ $item->ruang }}"
                                data-kelas="{{ $item->kelas }}" data-waktu="{{ $item->waktu }}"
                                data-kegiatan="{{ $item->kegiatan->nama }}" data-santri="{{ $santri->id }}">
                                <h4 class="text-base font-medium text-slate-700">{{ $item->kegiatan->nama }}</h4>
                                <p class="text-xs font-light text-slate-700 mb-3">{{ $item->waktu }}</p>
                                <h4 class="text-sm font-normal text-slate-700">Pemateri : {{ $item->ustadz->nama }}</h4>
                                <h4 class="text-sm font-normal text-slate-700">Pendamping : Bang {{ $item->musrif->nama }}
                                </h4>
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
            <div id="absen-modal" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-lg font-semibold text-gray-900">
                                <input type="text" class="border-white" name="kegiatan" id="">
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-toggle="absen-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <form class="p-4 md:p-5" method="POST" action="{{ route('absen') }}">
                            @csrf
                            <div class="grid gap-4 mb-4 grid-cols-2">
                                <input type="hidden" name="jadwal_id" id="jadwal_id">
                                <input type="hidden" name="santri" id="santri">
                                <div class="col-span-2">
                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Ruang</label>
                                    <input type="text" name="ruang" id="ruang"
                                        class="bg-gray-50 border border-gray-300 placeholder-slate-800 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                        placeholder="" disabled>
                                </div>
                                <div class="col-span-2">
                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Kelas</label>
                                    <input type="text" name="kelas" id="kelas"
                                        class="bg-gray-50 border border-gray-300 placeholder-slate-800 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                        placeholder="" disabled>
                                </div>
                                <div class="col-span-2">
                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Jam</label>
                                    <input type="datetime-local" name="waktu" id="waktu"
                                        class="bg-gray-50 border border-gray-300 placeholder-slate-800 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                        placeholder="" disabled>
                                </div>
                            </div>
                            <button type="submit"
                                class="text-white inline-flex items-center justify-center bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 w-full text-center">
                                Hadirun
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var absenButtons = document.querySelectorAll('[data-modal-toggle="absen-modal"]');

            absenButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    var kegiatan = button.getAttribute('data-kegiatan');
                    var id = button.getAttribute('data-jadwal-id');
                    var ruang = button.getAttribute('data-ruang');
                    var kelas = button.getAttribute('data-kelas');
                    var waktu = button.getAttribute('data-waktu');
                    var santri = button.getAttribute('data-santri');

                    var modal = document.getElementById('absen-modal');

                    modal.querySelector('input[name="kegiatan"]').value = kegiatan;
                    modal.querySelector('input[name="jadwal_id"]').value = id;
                    modal.querySelector('input[name="ruang"]').value = ruang;
                    modal.querySelector('input[name="kelas"]').value = kelas;
                    modal.querySelector('input[name="waktu"]').value = waktu;
                    modal.querySelector('input[name="santri"]').value = santri;

                    // Kirim AJAX request untuk memeriksa absensi
                    axios.get(`/santri/check-absen/${id}/${santri}`)
                        .then(function(response) {
                            var sudahAbsen = response.data.sudahAbsen;

                            // Memeriksa dan mengubah teks tombol berdasarkan status absensi
                            var submitButton = modal.querySelector('button[type="submit"]');
                            console.log(sudahAbsen);
                            if (sudahAbsen) {
                                submitButton.textContent = 'Anda sudah absen';
                                submitButton.classList.remove('bg-green-500',
                                    'hover:bg-green-600', 'focus:ring-green-300');
                                submitButton.classList.add('bg-gray-400', 'cursor-not-allowed');
                                submitButton.disabled = true;
                                console.log('sudah');
                            } else {
                                submitButton.textContent = 'Hadirun';
                                submitButton.classList.remove('bg-gray-400',
                                    'cursor-not-allowed');
                                submitButton.classList.add('bg-green-500', 'hover:bg-green-600',
                                    'focus:ring-green-300');
                                submitButton.disabled = false;
                                console.log('belum');
                            }
                            console.log('try');

                        })
                        .catch(function(error) {
                            console.log('catch');
                            console.error('Error checking absen:', error);
                        });
                });
            });
        });
    </script>
@endsection
