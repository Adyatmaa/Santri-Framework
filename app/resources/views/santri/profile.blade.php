@extends('layouts.santri')
@section('content')
    <section>
        <p class="mb-10">Profile Page</p>

        @foreach ($santri as $row)
            <div class="relative w-6/12 overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <tbody>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Username
                            </th>
                            <td class="px-6 py-4 text-end">
                                {{ auth()->user()->username }}
                            </td>
                        </tr>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Nama
                            </th>
                            <td class="px-6 py-4 text-end">
                                {{ $row->nama }}
                            </td>
                        </tr>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                NIM
                            </th>
                            <td class="px-6 py-4 text-end">
                                {{ $row->nim }}
                            </td>
                        </tr>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Mabna
                            </th>
                            <td class="px-6 py-4 text-end">
                                {{ $row->mabna }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        @endforeach
    </section>
@endsection
