@extends('Admin.layout.layout')

@section('title', 'Supplier')

@section('script')

@endsection

@section('content')
    @php
        use App\Models\User;
    @endphp
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
                                <td class="px-4 py-2 border-b">#</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{-- supplier create modal --}}
        <div class="modal fade" id="supplierModal" tabindex="-1" aria-labelledby="supplierModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content p-4 rounded-lg">
                    <div class="modal-header">
                        <h5 class="modal-title text-xl font-bold" id="supplierModalLabel">Create Suppliers</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="supplierForm" action="{{ route('supplier.store') }}" method="POST" class="space-y-4">
                            @csrf
                            <div>
                                <label for="supplier_name" class="block text-sm font-medium text-gray-700">Name</label>
                                <input type="text" name="supplier_name"
                                    class="mt-1 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                            </div>
                            <div>
                                <label for="supplier_location"
                                    class="block text-sm font-medium text-gray-700">Location</label>
                                <input type="text" name="supplier_location"
                                    class="mt-1 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                            </div>
                            <div>
                                <label for="supplier_contact"
                                    class="block text-sm font-medium text-gray-700">Contact</label>
                                <input type="text" name="supplier_contact"
                                    class="mt-1 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/admin.js') }}"></script>
    </div>
@endsection
