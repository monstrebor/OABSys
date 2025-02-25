@extends('Admin.layout.layout')

@section('title', 'Login Page')

@section('script')

@endsection

@section('content')
    <div class="w-full h-full">
        @include('Admin.partials.navbar')
        @include('Admin.partials.sidebar')
        @include('layout.all_notif')
        <livewire:settings.change-password>

    </div>
@endsection

