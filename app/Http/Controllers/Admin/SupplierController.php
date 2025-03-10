<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function supplier_index()
    {
        $allSuppliers = Supplier::all();
        return view('Admin.supplier.index', compact('allSuppliers'));
    }

    public function supplier_store(Request $request)
    {
        $validated = $request->validate([
            'supplier_name' => 'required',
            'supplier_location' => 'required',
            'supplier_contact' => 'required',
        ]);
        $userID = auth()->user()->id;

        Supplier::create([
            'supplier_name' => $validated['supplier_name'],
            'supplier_location' => $validated['supplier_location'],
            'supplier_contact' => $validated['supplier_contact'],
            'creator_id' => $userID,
        ]);

        return redirect()->back()->with('success', 'Data stored successfully!!');
    }

    public function supplier_update(Request $request)
    {
        // Validate request
        $validated = $request->validate([
            'id' => 'required|exists:suppliers,id',
            'supplier_name' => 'required|string|max:255',
            'supplier_location' => 'required|string|max:255',
            'supplier_contact' => 'required|string|max:255',
        ]);

        // Find supplier by ID
        $supplier = Supplier::findOrFail($validated['id']);

        // Update supplier details using instance method
        $supplier->update([
            'supplier_name' => $validated['supplier_name'],
            'supplier_location' => $validated['supplier_location'],
            'supplier_contact' => $validated['supplier_contact'],
        ]);

        return redirect()->back()->with('success', 'Supplier updated successfully!');
    }

    public function supplier_destroy($id){
        Supplier::findOrFail( $id )->delete();

        return redirect()->back()->with('success','Supplier deleted successfully');
    }

}
