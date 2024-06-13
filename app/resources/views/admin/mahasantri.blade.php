@extends('layouts.admin')
@section('content')
    <!-- Header-->
    <section>
        <div class="container mb-6">
            <h5 class="text-xl font-bold mb-8 dark:text-white">Daftar Mahasantri</h5>
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
                                Nim
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Nama
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Mabna
                            </div>
                        </th>
                        {{-- <th scope="col" class="px-6 py-3">
                            <div class="flex items-right">
                                Aksi
                            </div>
                        </th> --}}
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
                                {{ $row->nim }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $row->nama }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $row->mabna }}
                            </td>
                            {{-- <td class="flex px-6 py-4">
                                <a href="#"
                                    class="font-medium text-blue-600 mx-2 dark:text-blue-500 hover:underline">Edit</a>
                                <form action="" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="font-medium text-red-600 dark:text-red-500 hover:underline">
                                        Delete
                                    </button>
                                </form>
                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
