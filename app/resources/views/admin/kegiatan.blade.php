@extends('layouts.admin')
@section('content')
    <!-- Header-->
    <section>
        <div class="container mb-8">
            <h5 class="text-xl mb-8 font-bold dark:text-white">List Kegiatan Mahad</h5>
            <form class="flex items-center w-auto mx-auto" method="POST" action="{{ route('addKegiatan') }}">
                @csrf
                <div class="relative w-full">
                    <input type="text" id="kegiatan" name="kegiatan"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Tambah Kegiatan" required />
                </div>
                <button type="submit"
                    class="inline-flex items-center w-auto py-2.5 px-3 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Tambah
                </button>
            </form>
        </div>
    </section>

    <!-- Tables --->
    <section>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Nama Kegiatan
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Aksi
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if ($record->isEmpty())
                        <p>kosong</p>
                    @endif
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($record as $row)
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700"">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $no++ }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $row->nama }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="items-center">
                                    <button type="button"
                                        class="font-medium text-blue-600 mx-2 dark:text-blue-500 hover:underline"
                                        data-modal-target="edit-modal" data-modal-toggle="edit-modal"
                                        data-modal-show="edit-modal" data-nama="{{ $row->nama }}"
                                        data-id="{{ $row->id }}">
                                        Edit
                                    </button>
                                    <form action="{{ route('delKegiatan', ['id' => $row->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="font-medium text-red-600 mx-2 dark:text-red-500 hover:underline">
                                            Delete
                                        </button>
                                    </form>
                                </div>
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
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Update Kegiatan
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="edit-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form class="p-4 md:p-5" method="POST" action="">
                        @csrf
                        @method('PUT')
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2">
                                <label for="nama"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                    Kegiatan</label>
                                <input type="text" name="nama" id="nama"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="" required="">
                            </div>
                        </div>
                        <input type="hidden" name="id" id="id">
                        <button type="submit"
                            class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Ubah Kegiatan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var editButtons = document.querySelectorAll('[data-modal-toggle="edit-modal"]');

            editButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    var nama = button.getAttribute('data-nama');
                    var id = button.getAttribute('data-id');

                    var modal = document.getElementById('edit-modal');

                    modal.querySelector('input[name="nama"]').value = nama;
                    modal.querySelector('input[name="id"]').value = id;

                    modal.querySelector('form').action = `edit-kegiatan/${id}`;
                });
            });
        });
    </script>
@endsection
