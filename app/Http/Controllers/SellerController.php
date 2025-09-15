<?php

namespace App\Http\Controllers;
use App\Models\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    
public function getSellersJson()
{
    $sellers = \App\Models\Seller::all(); // fetch all sellers
    return response()->json($sellers);
}


    public function index()
    {
        $sellers = Seller::all();
        return view('sellers.index', compact('sellers'));
    }

    public function create()
    {
        return view('sellers.create');
    }
public function store(Request $request)
{
    $request->validate([
        'name'  => 'required',
        'email' => 'required|email|unique:sellers,email',
        'phone' => 'required',
        'registration_number' => 'required',
        'ntn' => 'required',
        'province' => 'required',
        'environment' => 'required',
    ]);

    // Convert scenarios (checkbox array) into JSON
    $data = $request->all();
    $data['scenarios'] = $request->scenarios ? json_encode($request->scenarios) : null;

    Seller::create($data);

    return redirect()->route('sellers.index')->with('success', 'Seller added successfully!');
}



    public function edit(Seller $seller)
    {
        return view('sellers.edit', compact('seller'));
    }

   public function update(Request $request, $id)
{
    $request->validate([
        'name'  => 'required',
        'email' => 'required|email|unique:sellers,email,' . $id,
        'phone' => 'required',
        'registration_number' => 'required',
        'ntn' => 'required',
        'province' => 'required',
        'environment' => 'required',
    ]);

    $seller = Seller::findOrFail($id);
    $seller->update($request->all());

    return redirect()->route('sellers.index')->with('success', 'Seller updated successfully!');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }


    public function destroy(string $id, Seller $seller)
    {
        $seller->delete();
        return redirect()->route('sellers.index')->with('success', 'Seller deleted successfully!');
    }
}
