<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Santri</title>
</head>

<body>
    <section>
        <div class="w-full">
            <div class="block lg:flex">
                <img src="{{ asset('assets/poto/login.jpg') }}" alt="" srcset=""
                    class="h-52 w-full object-cover lg:w-3/5 lg:h-screen">
                <div class="flex flex-col items-center justify-center my-6 lg:mx-auto">
                    <div class="text-center w-[80%] lg:w-full">
                        <h1 class="text-3xl font-bold mb-1 lg:mb-4 lg:text-5xl">Welcome Back!</h1>
                        <p class="text-xs font-medium text-gray-500 lg:text-sm">Silahkan login terlebih dahulu, atau login
                            sebagai admin</p>
                        <form action="" class="pt-10">
                            <div class="mb-5">
                                <input type="text" id="first_name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Username" required />
                            </div>
                            <div class="mb-5">
                                <input type="password" id="password"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Password" required />
                            </div>
                            <div class="mb-3">
                                <button type="button"
                                    class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm p-2.5 w-full me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Login</button>
                            </div>
                            <div class="mb-3">
                                <h1 class="text-xs font-semibold">OR</h1>
                            </div>
                            <div class="flex gap-2 justify-center">
                                <div class="mb-2">
                                    <a href=""
                                        class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 w-full overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800"><span
                                            class="relative p-2 w-full transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                            Sign Up
                                        </span></a>
                                </div>
                                <div class="mb-2">
                                    <a href="{{ Route('dashboard') }}"
                                        class="relative inline-flex items-center justify-center w-full p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-500 to-pink-500 group-hover:from-purple-500 group-hover:to-pink-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800"><span
                                            class="relative p-2 w-full transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                            Musrif
                                        </span></a>
                                </div>
                                <div class="mb-2">
                                    <a href="{{ route('dashboardS') }}"
                                        class="relative inline-flex items-center justify-center w-full p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-500 to-pink-500 group-hover:from-purple-500 group-hover:to-pink-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800"><span
                                            class="relative p-2 w-full transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                            Santri
                                        </span></a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
</body>

</html>
