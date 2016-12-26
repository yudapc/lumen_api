<?php

namespace App\Http\Controllers;

use App\Models\Store;

class StoresController extends Controller
{
    public function index()
    {
        $stores = Store::with('merchant')->get();
        return response()->json($stores);
    }

    public function show($id)
    {
        $store  = Store::with('merchant')->find($id);
        return response()->json($store);
    }

    public function create(Request $request)
    {
        $store = Store::create($request->all());
        return response()->json($store);
    }

    public function update(Request $request, $id)
    {
        $store  = Store::find($id);
        $store->name = $request->input('name');
        $store->email = $request->input('email');
        $store->phone = $request->input('phone');
        $store->description = $request->input('description');
        $store->address = $request->input('address');
        $store->merchant_id = $request->input('merchant_id');
        $store->save();
        return response()->json($store);
    }

    public function destroy($id)
    {
        $store  = Store::find($id);
        $store->delete();
        return response()->json('deleted');
    }
}
