@extends('layouts.admin')
@section('content')
    <!-- Header-->
    <section>
        <div class="container flex justify-between mb-6">
            <h5 class="text-xl font-bold dark:text-white">Jadwal Ta'lim</h5>
            <form action="">
                @csrf
                <button type="button"
                    class="focus:outline-none text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    Tambah Kelas
                </button>
            </form>
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
                                Ruang
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Ta'lim
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Pengajar
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="">Aksi</span>
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
                            Idharah Lantai 1
                        </td>
                        <td class="px-6 py-4">
                            19.00 - 21.00
                        </td>
                        <td class="px-6 py-4">
                            Afkar
                        </td>
                        <td class="px-6 py-4">
                            Ustadz Zauzan
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-blue-600 mx-2 dark:text-blue-500 hover:underline">Edit</a>
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
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
                            Idharah Lantai 1
                        </td>
                        <td class="px-6 py-4">
                            19.00 - 21.00
                        </td>
                        <td class="px-6 py-4">
                            Afkar
                        </td>
                        <td class="px-6 py-4">
                            Ustadz Zauzan
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-blue-600 mx-2 dark:text-blue-500 hover:underline">Edit</a>
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
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
                            Idharah Lantai 1
                        </td>
                        <td class="px-6 py-4">
                            19.00 - 21.00
                        </td>
                        <td class="px-6 py-4">
                            Afkar
                        </td>
                        <td class="px-6 py-4">
                            Ustadz Zauzan
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-blue-600 mx-2 dark:text-blue-500 hover:underline">Edit</a>
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
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
                            Idharah Lantai 1
                        </td>
                        <td class="px-6 py-4">
                            19.00 - 21.00
                        </td>
                        <td class="px-6 py-4">
                            Afkar
                        </td>
                        <td class="px-6 py-4">
                            Ustadz Zauzan
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-blue-600 mx-2 dark:text-blue-500 hover:underline">Edit</a>
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection
