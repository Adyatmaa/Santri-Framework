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
                            <td class="flex px-6 py-4">
                                <a href="#"
                                    class="font-medium text-blue-600 mx-2 dark:text-blue-500 hover:underline">Edit</a>
                                <form action="{{ route('delKegiatan', ['id' => $row->id]) }}" method="POST">
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
    </section>
@endsection
