@extends('layout.layout')

@section('title', 'Login Page')

@section('script')
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
@endsection

@section('content')
    <div class="w-full h-full">
        @include('partials.navbar')
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <section class="relative py-20 2xl:py-40 bg-gray-800 overflow-hidden">
                <img class="hidden lg:block absolute inset-0 mt-32" src="zospace-assets/lines/line-mountain.svg"
                    alt="">
                <img class="hidden lg:block absolute inset-y-0 right-0 -mr-40 -mt-32"
                    src="zospace-assets/lines/line-right-long.svg" alt="">
                <div class="relative container px-4 mx-auto">
                    <div class="max-w-5xl mx-auto">
                        @include('layout.all_notif')
                        <div class="flex flex-wrap items-center -mx-4">
                            <div class="w-full lg:w-1/2 px-4 mb-16 lg:mb-0">
                                <div class="max-w-md">
                                    <h2 class="mt-8 mb-12 text-5xl font-bold font-heading text-white">You can now login the account you created.</h2>
                                    <p class="text-lg text-gray-200">
                                    </p>
                                </div>
                            </div>
                            <div class="w-full lg:w-1/2 px-4">
                                <div class="px-6 lg:px-20 py-12 lg:py-24 bg-gray-600 rounded-lg">
                                    <div>
                                        {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
                                        <form action="{{route('login.store')}}" method="POST">
                                            @csrf
                                            <h3 class="mb-10 text-2xl text-white font-bold font-heading text-center">Login Account</h3>
                                            <div class="flex items-center pl-6 mb-3 bg-white rounded-full">
                                                <span class="inline-block font-bold pr-3 py-2 border-r border-gray-50 text-black">
                                                    Email:
                                                </span>
                                                <input
                                                    class="w-full pl-4 pr-6 py-4 font-bold placeholder-gray-500 text-black rounded-r-full focus:outline-none"
                                                    name='email' type="email" placeholder="example@email.com">
                                            </div>
                                            @error('email')
                                                <span class="text-lg bg-white p-1 text-red-500">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                            <div class="flex items-center pl-6 mb-3 bg-white rounded-full">
                                                <span class="inline-block font-bold pr-3 py-2 border-r border-gray-50 text-black">
                                                    Password:
                                                </span>
                                                <input
                                                    class="w-full pl-4 pr-6 py-4 font-bold placeholder-gray-500 text-black rounded-r-full focus:outline-none"
                                                    name="password" type="password">
                                            </div>
                                            @error('password')
                                                <span class="text-lg bg-white p-1 text-red-500">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                            <button type="submit"
                                                class="py-4 w-full bg-blue-500 hover:bg-blue-600 text-white font-bold rounded-full transition duration-200">
                                                Login
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
