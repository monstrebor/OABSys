@extends('Admin.layout.layout')

@section('title', 'Product Page')

@section('script')

@endsection

@section('content')
    <div class="w-full h-full">
        @include('Admin.partials.navbar')
        @include('Admin.partials.sidebar')
        @inject('Image', 'App\Services\Image')
        <div class="w-full h-screen flex justify-center bg-gray-100">
            <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-6xl mt-4">
                @include('layout.all_notif')
                <h1 class="text-center text-[30px] font-bold mb-6">PRODUCTS TABLE</h1>
                <button type="button" class="btn btn-primary offset-11 mb-1" data-bs-toggle="modal"
                    data-bs-target="#supplierModal">
                    Create
                </button>
                <table class="w-full border border-gray-200 rounded-lg">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="text-left px-4 py-2 text-gray-600 font-medium border-b">ID</th>
                            <th class="text-left px-4 py-2 text-gray-600 font-medium border-b">Name</th>
                            <th class="text-left px-4 py-2 text-gray-600 font-medium border-b">Description</th>
                            <th class="text-left px-4 py-2 text-gray-600 font-medium border-b">Supplier</th>
                            <th class="text-left px-4 py-2 text-gray-600 font-medium border-b">Image</th>
                            <th class="text-left px-4 py-2 text-gray-600 font-medium border-b">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $item)
                            <tr>
                                <td class="px-4 py-2 border-b">{{ $item->id }}</td>
                                <td class="px-4 py-2 border-b">{{ $item->product_name }}</td>
                                <td class="px-4 py-2 border-b">{{ $item->description }}</td>
                                <td class="px-4 py-2 border-b">#</td>
                                <td class="px-4 py-2 border-b">
                                    <img src="{{ asset('storage/images/' . $item->image) }}" alt="Product Image" class="w-16 h-16 object-cover rounded">
                                </td>
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
                        <h5 class="modal-title text-xl font-bold" id="supplierModalLabel">Create Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="supplierForm" action="{{route('product.store')}}" method="POST" class="space-y-4" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <label for="product_name" class="block text-sm font-medium text-gray-700">Product Name</label>
                                <input type="text" name="product_name"
                                    class="mt-1 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                            </div>
                            <div>
                                <label for="description"
                                    class="block text-sm font-medium text-gray-700">Description</label>
                                <textarea type="text" name="description" placeholder="add description here..."
                                    class="mt-1 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
                            </div>
                            <div>
                                <label for="supplier_id"
                                    class="block text-sm font-medium text-gray-700">Supplier</label>
                                <select type="text" name="supplier_id"
                                    class="mt-1 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                                <option value="" selected>Choose supplier</option>
                                @foreach ($suppliers as $item)
                                <option value="{{$item->id}}">{{$item->supplier_name}}</option>
                                @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                                <input type="file" name="image" class="mt-1 w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
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
    </div>
@endsection
