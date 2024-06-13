@extends('layouts.admin')
@section('content')
    <section>
        <div class="">
            <p>Howdy, {{ auth()->user()->nama }}</p>
        </div>
    </section>
    <section class="lg:flex lg:gap-4 lg:justify-center">
        <div class="my-6 lg:w-3/5">
            <div class="bg-white rounded-lg shadow">
                {!! $chart->container() !!}
            </div>
        </div>
        <div class="my-6 lg:w-[35%]">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 w-5/12">
                                <div class="flex items-center">
                                    Nama Ustad
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Kelas Ta'lim
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700"">
                            <td class="px-6 py-4">
                                Ustadz Zauzan
                            </td>
                            <td class="px-6 py-4">
                                Asasi
                            </td>
                        </tr>
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700"">
                            <td class="px-6 py-4">
                                Ustadz Zauzan
                            </td>
                            <td class="px-6 py-4">
                                Asasi
                            </td>
                        </tr>
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700"">
                            <td class="px-6 py-4">
                                Ustadz Zauzan
                            </td>
                            <td class="px-6 py-4">
                                Asasi
                            </td>
                        </tr>
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700"">
                            <td class="px-6 py-4">
                                Ustadz Zauzan
                            </td>
                            <td class="px-6 py-4">
                                Asasi
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

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
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Kelas Ta'lim
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Kelas Tashih
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-right">
                                Aksi
                            </div>
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
                            210603774926
                        </td>
                        <td class="px-6 py-4 w-3/12">
                            Hasan
                        </td>
                        <td class="px-6 py-4">
                            Ibnu Khaldun
                        </td>
                        <td class="px-6 py-4">
                            Asasi
                        </td>
                        <td class="px-6 py-4">
                            Mutawasith
                        </td>
                        <td class="px-6 py-4">
                            <a href="#"
                                class="font-medium text-blue-600 mx-2 dark:text-blue-500 hover:underline">Edit</a>
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                        </td>
                    </tr>
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700"">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            2
                        </th>
                        <td class="px-6 py-4">
                            210603774926
                        </td>
                        <td class="px-6 py-4 w-3/12">
                            Hasan
                        </td>
                        <td class="px-6 py-4">
                            Ibnu Khaldun
                        </td>
                        <td class="px-6 py-4">
                            Asasi
                        </td>
                        <td class="px-6 py-4">
                            Mutawasith
                        </td>
                        <td class="px-6 py-4">
                            <a href="#"
                                class="font-medium text-blue-600 mx-2 dark:text-blue-500 hover:underline">Edit</a>
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                        </td>
                    </tr>
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700"">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            3
                        </th>
                        <td class="px-6 py-4">
                            210603774926
                        </td>
                        <td class="px-6 py-4 w-3/12">
                            Hasan
                        </td>
                        <td class="px-6 py-4">
                            Ibnu Khaldun
                        </td>
                        <td class="px-6 py-4">
                            Asasi
                        </td>
                        <td class="px-6 py-4">
                            Mutawasith
                        </td>
                        <td class="px-6 py-4">
                            <a href="#"
                                class="font-medium text-blue-600 mx-2 dark:text-blue-500 hover:underline">Edit</a>
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                        </td>
                    </tr>
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700"">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            4
                        </th>
                        <td class="px-6 py-4">
                            210603774926
                        </td>
                        <td class="px-6 py-4 w-3/12">
                            Hasan
                        </td>
                        <td class="px-6 py-4">
                            Ibnu Khaldun
                        </td>
                        <td class="px-6 py-4">
                            Asasi
                        </td>
                        <td class="px-6 py-4">
                            Mutawasith
                        </td>
                        <td class="px-6 py-4">
                            <a href="#"
                                class="font-medium text-blue-600 mx-2 dark:text-blue-500 hover:underline">Edit</a>
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <script src="{{ $chart->cdn() }}"></script>

    {{ $chart->script() }}
@endsection
