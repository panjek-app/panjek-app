<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;

class FrontController extends Controller
{
    public function home() { return view('halamanHome'); }

    public function food()
    {
        $stores = Store::all();
        return view('halamanFood', compact('stores'));
    }

    public function admin()
    {
        $stores = Store::all();
        return view('halamanAdmin', compact('stores'));
    }

    public function company() { return view('halamanCompany'); }

    public function tambah() { return view('tambahWarung'); }

    public function simpan(Request $request)
    {
        Store::create([
            'nama'   => $request->nama,
            'alamat' => $request->alamat,
            'image'  => $request->image
        ]);
        return redirect('/rahasia-admin');
    }

    public function hapus($id)
    {
        $store = Store::find($id);
        if($store) { $store->delete(); }
        return redirect('/rahasia-admin');
    }
}
