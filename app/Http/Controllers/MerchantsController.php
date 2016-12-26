<?php

namespace App\Http\Controllers;

use App\Models\Merchant;

class MerchantsController extends Controller
{
    public function index()
    {
        $merchants = Merchant::with('stores')->get();
        return response()->json($merchants);
    }

    public function show($id)
    {
        $merchant  = Merchant::with('stores')->find($id);
        return response()->json($merchant);
    }

    public function create(Request $request)
    {
        $merchant = Merchant::create($request->all());
        return response()->json($merchant);
    }

    public function update(Request $request, $id)
    {
        $merchant  = Merchant::find($id);
        $merchant->name = $request->input('name');
        $merchant->email = $request->input('email');
        $merchant->phone = $request->input('phone');
        $merchant->description = $request->input('description');
        $merchant->address = $request->input('address');
        $merchant->save();
        return response()->json($merchant);
    }

    public function destroy($id)
    {
        $merchant  = Merchant::find($id);
        $merchant->delete();
        return response()->json('deleted');
    }
}
