@extends('layouts.santri')
@section('content')
    <!-- Header-->
    <section>
        <div class="container mb-6">
            <h5 class="text-xl font-bold dark:text-white">Jadwal Tashih</h5>
        </div>
    </section>

    <!-- Tables --->
    <section>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 w-1/12">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Kelas
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Hari
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Jam
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Juz
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Pengajar
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700"">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            1
                        </th>
                        <td class="px-6 py-4">
                            Asasi
                        </td>
                        <td class="px-6 py-4">
                            Kamis
                        </td>
                        <td class="px-6 py-4">
                            19.00 - 21.00
                        </td>
                        <td class="px-6 py-4">
                            20 Juz
                        </td>
                        <td class="px-6 py-4">
                            Ustadz Zauzan
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Masuk Kelas</a>
                        </td>
                    </tr>
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700"">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            2
                        </th>
                        <td class="px-6 py-4">
                            Asasi
                        </td>
                        <td class="px-6 py-4">
                            Kamis
                        </td>
                        <td class="px-6 py-4">
                            19.00 - 21.00
                        </td>
                        <td class="px-6 py-4">
                            20 Juz
                        </td>
                        <td class="px-6 py-4">
                            Ustadz Zauzan
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Masuk Kelas</a>
                        </td>
                    </tr>
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700"">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            3
                        </th>
                        <td class="px-6 py-4">
                            Asasi
                        </td>
                        <td class="px-6 py-4">
                            Kamis
                        </td>
                        <td class="px-6 py-4">
                            19.00 - 21.00
                        </td>
                        <td class="px-6 py-4">
                            20 Juz
                        </td>
                        <td class="px-6 py-4">
                            Ustadz Zauzan
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Masuk Kelas</a>
                        </td>
                    </tr>
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700"">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            4
                        </th>
                        <td class="px-6 py-4">
                            Asasi
                        </td>
                        <td class="px-6 py-4">
                            Kamis
                        </td>
                        <td class="px-6 py-4">
                            19.00 - 21.00
                        </td>
                        <td class="px-6 py-4">
                            20 Juz
                        </td>
                        <td class="px-6 py-4">
                            Ustadz Zauzan
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Masuk Kelas</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection
