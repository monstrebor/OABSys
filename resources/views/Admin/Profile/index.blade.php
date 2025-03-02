@extends('Admin.layout.layout')

@section('title', 'Profile Page')

@section('script')

@endsection

@section('content')
    <div class="w-full h-full">
        @include('Admin.partials.navbar')
        @include('Admin.partials.sidebar')

        <div class="w-full h-screen flex justify-center items-center">
            <h1>PROFILE</h1>
        </div>


    </div>
@endsection
