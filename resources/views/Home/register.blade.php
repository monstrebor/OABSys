@extends('layout.layout')

@section('title', 'Registration Page')

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
                                    <h2 class="mt-8 mb-12 text-5xl font-bold font-heading text-white">Start your journey by
                                        creating an account.</h2>
                                    <p class="text-lg text-gray-200">
                                        <span>The brown fox jumps over</span>
                                        <span class="text-white">the lazy dog.</span>
                                    </p>
                                </div>
                            </div>
                            <div class="w-full lg:w-1/2 px-4">
                                <div class="px-6 lg:px-20 py-12 lg:py-24 bg-gray-600 rounded-lg">
                                    <livewire:UserRegistration>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
