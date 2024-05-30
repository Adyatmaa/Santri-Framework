@extends('layouts.admin')
@section('content')
    <section>
        <div class="container items-center ">
            <div
                class="block w-5/12 p-6 bg-white border border-gray-200 rounded-lg shadow  dark:bg-gray-800 dark:border-gray-700">
                <form class="max-w-sm mx-auto">
                    <div class="mb-5">
                        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Ta'lim
                        </label>
                        <select id="countries"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>Afkar</option>
                            <option>Quran</option>
                            <option>Afkar</option>
                            <option>Quran</option>
                        </select>
                    </div>
                    <div class="mb-5">
                        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Kelas
                        </label>
                        <select id="countries"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>Kelas Asasi</option>
                            <option>Kelas Mutawasith</option>
                            <option>Kelas Asasi</option>
                            <option>Kelas Mutawasith</option>
                        </select>
                    </div>
                    <div class="mb-5">
                        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Ruang Kelas
                        </label>
                        <select id="countries"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>Gedung B.307</option>
                            <option>Gedung A.217</option>
                            <option>Halaqah Mabna</option>
                            <option>Idharah</option>
                        </select>
                    </div>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>
            </div>
        </div>
    </section>
@endsection
