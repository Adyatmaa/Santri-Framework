@extends('layouts.admin')
@section('content')
    <!-- Header-->
    <section>
        <div class="container flex justify-between mb-6">
            <h5 class="text-xl font-bold dark:text-white">Jadwal</h5>
            <a href="{{ route('inputJadwal') }}"
                class="focus:outline-none text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                Tambah Jadwal
            </a>
        </div>
    </section>

    <!-- Tables --->
    <section>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 w-1/12">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Kegiatan
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Ustadz
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Musrif Pendamping
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Kelas
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Ruang
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Jam
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="">Aksi</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($record as $item)
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700"">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $no++ }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $item->kegiatan->nama }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->ustadz->nama }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->musrif->nama }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->kelas }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->ruang }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->waktu }} WIB
                            </td>
                            <td class="flex px-6 py-4">
                                <button type="button"
                                    class="font-medium text-blue-600 mx-2 dark:text-blue-500 hover:underline"
                                    data-modal-target="edit-modal" data-modal-toggle="edit-modal"
                                    data-modal-show="edit-modal" data-id="{{ $item->id }}"
                                    data-kegiatan-id="{{ $item->kegiatan_id }}" data-kegiatan="{{ $item->kegiatan->nama }}"
                                    data-musrif-id="{{ $item->musrif_id }}" data-musrif="{{ $item->musrif->nama }}"
                                    data-ustadz-id="{{ $item->ustadz_id }}" data-ustadz="{{ $item->ustadz->nama }}"
                                    data-kelas="{{ $item->kelas }}" data-ruang="{{ $item->ruang }}"
                                    data-waktu="{{ $item->waktu }}">
                                    Edit
                                </button>
                                <form action="{{ route('delJadwal', ['id' => $item->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="font-medium text-red-600 dark:text-red-500 hover:underline">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- Main modal -->
        <div id="edit-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Update Jadwal
                        </h3>
                        <button type="button"
                            class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="edit-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5">
                        <form class="space-y-4" action="#" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-5">
                                <input type="text" name="id" id="id">
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Nama Kegiatan
                                </label>
                                <select id="kegiatan" name="kegiatan"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    @foreach ($kegiatan as $rowk)
                                        <option value="{{ $rowk->id }}">{{ $rowk->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-5">
                                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Ustadz / Pemateri
                                </label>
                                <select id="ustad" name="ustad"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    @foreach ($ustad as $rowus)
                                        <option value="{{ $rowus->id }}">{{ $rowus->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-5">
                                <label for="countries"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Musrif Pendamping
                                </label>
                                <select id="musrif" name="musrif"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    @foreach ($musrif as $row)
                                        <option value="{{ $row->id }}">{{ $row->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-5">
                                <label for="countries"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Kelas
                                </label>
                                <select id="kelas" name="kelas"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option>-</option>
                                    <option>Asasi</option>
                                    <option>Mutawasith</option>
                                    <option>Al Aly</option>
                                </select>
                            </div>
                            <div class="mb-5">
                                <label for="ruang"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Ruang
                                </label>
                                <input type="text" id="ruang" name="ruang"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Ruang" required />
                            </div>
                            <div class="mb-5">
                                <label for="waktu"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Waktu
                                </label>
                                <input type="text" id="waktu" name="waktu" autocomplete="off"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Jam" required />
                            </div>
                            <button type="submit"
                                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Update Jadwal
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var editButtons = document.querySelectorAll('[data-modal-toggle="edit-modal"]');

            editButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    var id = button.getAttribute('data-id');

                    var kegiatan_id = button.getAttribute('data-kegiatan-id');

                    var musrif_id = button.getAttribute('data-musrif-id');

                    var ustadz_id = button.getAttribute('data-ustadz-id');

                    var kelas = button.getAttribute('data-kelas');
                    var ruang = button.getAttribute('data-ruang');
                    var waktu = button.getAttribute('data-waktu');

                    var modal = document.getElementById('edit-modal');

                    modal.querySelector('input[name="id"]').value = id;

                    modal.querySelector('select[name="kegiatan"]').value = kegiatan_id;

                    modal.querySelector('select[name="musrif"]').value = musrif_id;

                    modal.querySelector('select[name="ustad"]').value = ustadz_id;

                    modal.querySelector('select[name="kelas"]').value = kelas;
                    modal.querySelector('input[name="ruang"]').value = ruang;
                    modal.querySelector('input[name="waktu"]').value = waktu;

                    modal.querySelector('form').action = `edit-jadwal/${id}`;
                });
            });
        });
    </script>
@endsection
