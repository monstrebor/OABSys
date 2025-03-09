@extends('Admin.layout.layout')

@section('title', 'Profile Page')

@section('script')

@endsection

@section('content')
    <div class="w-full h-full">
        @include('Admin.partials.navbar')
        @include('Admin.partials.sidebar')


        <div class="w-full h-screen flex justify-center bg-gray-100">
            <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-xl mt-4">
                @include('layout.all_notif')
                <h1 class="text-center text-2xl font-bold mb-6">INFORMATION</h1>
                <button type="button" class="btn btn-primary offset-10 mb-1" data-bs-toggle="modal"
                    data-bs-target="#profileModal">
                    Edit
                </button>
                <table class="w-full border border-gray-200 rounded-lg">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="text-left px-4 py-2 text-gray-600 font-medium border-b">ID</th>
                            <th class="text-left px-4 py-2 text-gray-600 font-medium border-b">Name</th>
                            <th class="text-left px-4 py-2 text-gray-600 font-medium border-b">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-gray-50">
                            <td class="px-4 py-2 border-b">{{ $userId->id }}</td>
                            <td class="px-4 py-2 border-b">{{ $userId->name }}</td>
                            <td class="px-4 py-2 border-b">{{ $userId->email }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content p-4 rounded-lg">
                    <div class="modal-header">
                        <h5 class="modal-title text-xl font-bold" id="profileModalLabel">Edit Profile</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Profile Form -->
                        <form id="profileForm" action="{{ route('adminProfile.update') }}" method="POST"
                            enctype="multipart/form-data" class="space-y-4">
                            @csrf
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                <input type="text" id="name" name="name"
                                    class="mt-1 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" id="email" name="email"
                                    class="mt-1 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                            </div>
                            <div>
                                <label for="avatar" class="block text-sm font-medium text-gray-700">Avatar</label>
                                <input type="file" id="avatar" name="avatar"
                                    class="mt-1 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/admin.js') }}"></script>
@endsection
