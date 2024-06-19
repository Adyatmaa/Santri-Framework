@extends('layouts.admin')
@section('content')
    <section>
        <div class="text-end">
            <p>Howdy, {{ auth()->user()->nama }}</p>
        </div>
    </section>

    <!-- Chart -->
    <section class="lg:flex lg:gap-4 lg:justify-start">
        <div class="my-6 lg:w-3/5">
            <div class="bg-white rounded-lg shadow">
                {!! $chart->container() !!}
            </div>
        </div>
    </section>
    <section>
        <div class="mb-5 relative overflow-x-auto shadow-md sm:rounded-lg">
            <p class="p-4">Rekapitulasi Presensi Mahasantri</p>
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 w-1/12">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Jadwal
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Nama Mahasantri
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Mabna
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Musrif Pendamping
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Ustadz
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Kelas
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
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($absen as $item)
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700"">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $no++ }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $item->jadwal->kegiatan->nama }}
                            </td>
                            <td class="px-6 py-4 w-3/12">
                                {{ $item->santri->nama }}
                            </td>
                            <td class="px-6 py-4 w-2/12">
                                {{ $item->santri->mabna }}
                            </td>
                            <td class="px-6 py-4 w-3/12">
                                Bang {{ $item->jadwal->musrif->nama }}
                            </td>
                            <td class="px-6 py-4 w-3/12">
                                {{ $item->jadwal->ustadz->nama }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->jadwal->kelas }}
                            </td>
                            {{-- <td class="px-6 py-4">
                                <a href="#"
                                    class="font-medium text-blue-600 mx-2 dark:text-blue-500 hover:underline">Edit</a>
                                <a href="#"
                                    class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>



    <script src="{{ $chart->cdn() }}"></script>

    {{ $chart->script() }}
@endsection
