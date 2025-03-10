@extends('Admin.layout.layout')

@section('title', 'Product')

@section('script')

@endsection

@section('content')
    <div class="w-full h-full">
        @include('Admin.partials.navbar')
        @include('Admin.partials.sidebar')

        <div class="w-full h-screen flex justify-center bg-gray-100">
            <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-6xl mt-4">
                @include('layout.all_notif')
                <h1 class="text-center text-[30px] font-bold mb-6">SUPPLIERS TABLE</h1>
                <button type="button" class="btn btn-primary offset-11 mb-1" data-bs-toggle="modal"
                    data-bs-target="#supplierModal">
                    Create
                </button>
                <table class="w-full border border-gray-200 rounded-lg">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="text-left px-4 py-2 text-gray-600 font-medium border-b">ID</th>
                            <th class="text-left px-4 py-2 text-gray-600 font-medium border-b">Name</th>
                            <th class="text-left px-4 py-2 text-gray-600 font-medium border-b">Location</th>
                            <th class="text-left px-4 py-2 text-gray-600 font-medium border-b">Contacts</th>
                            <th class="text-left px-4 py-2 text-gray-600 font-medium border-b">Products</th>
                            <th class="text-left px-4 py-2 text-gray-600 font-medium border-b">Created By</th>
                            <th class="text-left px-4 py-2 text-gray-600 font-medium border-b">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allSuppliers as $item)
                            @php
                                $userName = User::find($item->creator_id);
                            @endphp
                            <tr class="bg-gray-50">
                                <td class="px-4 py-2 border-b">{{ $item->id }}</td>
                                <td class="px-4 py-2 border-b">{{ $item->supplier_name }}</td>
                                <td class="px-4 py-2 border-b">{{ $item->supplier_location }}</td>
                                <td class="px-4 py-2 border-b">{{ $item->supplier_contact }}</td>
                                <td class="px-4 py-2 border-b">#</td>
                                <td class="px-4 py-2 border-b">{{ $userName->name }}</td>
                                <td class="px-4 py-2 border-b flex">
                                    <button
                                        class="edit-btn border border-green-400 bg-green-100 text-green-600 hover:bg-green-200 active:bg-green-300 p-2 pl-4 rounded-md shadow-md pr-4 transition duration-200"
                                        data-supplier-id="{{ $item->id }}"
                                        data-supplier-name="{{ $item->supplier_name }}"
                                        data-supplier-location="{{ $item->supplier_location }}"
                                        data-supplier-contact="{{ $item->supplier_contact }}">
                                        Edit
                                    </button>
                                    <form action="" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button
                                            class="ml-2 border border-red-400 bg-red-100 text-red-600 hover:bg-red-200 active:bg-red-300 p-2 pl-4 rounded-md shadow-md pr-4 transition duration-200">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
