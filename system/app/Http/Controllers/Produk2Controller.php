<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Penjual;

class Produk2Controller extends Controller
{
    public function index()
    {
        $data['list_produk'] = Produk::all();
        return view('penjual.produk.index', $data);
    }

    public function create()
    {
        $data['list_kategori'] = Kategori::all();
        $data['list_penjual'] = Penjual::all();
        return view('penjual.produk.create', $data);
    }

    public function store(Request $request)
    {
        $produk = New Produk;
        $produk->id_kategori = request('id_kategori');
        $produk->id_penjual = request('id_penjual');
        $produk->nama_produk = request('nama_produk');
        $produk->warna = request('warna');
        $produk->stok = request('stok');
        $produk->harga = request('harga');
        $produk->save();

        return redirect('admin/produk')->with('success', 'Data Berhasil Di simpan');
    }

    public function show(Produk $produk)
    {
        $data['produk'] = $produk;
        return view('penjual.produk.show', $data);
    }

    public function edit(Produk $produk)
    {
        $data['list_kategori'] = Kategori::all();
        $data['list_penjual'] = Penjual::all();
        $data['produk'] = $produk;
        return view('penjual.produk.edit', $data);
    }

    public function update(Produk $produk)
    {
        $produk->nama_produk= request('nama_produk');
        $produk->warna= request('warna');
        $produk->stok= request('stok');
        $produk->harga= request('harga');
        $produk->save();

        return redirect('admin/produk')->with('success', 'Data Berhasil Di simpan');
    }

    public function destroy($produk)
    {
        Produk::destroy($produk);

        return back()->with('danger', 'Data Berhasil Di simpan');
    }

    function filter(){
        $nama = request('nama_produk');
        $stok = explode(",", request('stok'));
        $data['harga_min'] = $harga_min = request('harga_min');
        $data['harga_max'] = $harga_max = request('harga_max');
        $data['list_produk'] = Produk::where('nama_produk', 'like', "%$nama%")->get();
        // $data['list_produk'] = Produk::whereIn('stok', $stok)->get();
        // $data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->get();
        // $data['list_produk'] = Produk::where('stok', '<>', $stok)->get();
        // $data['list_produk'] = Produk::whereNotIn('stok', $stok)->get();
        // $data['list_produk'] = Produk::whereNotBetween('harga', [$harga_min, $harga_max])->get();
        // $data['list_produk'] = Produk::whereNotNull('stok')->get();
        // $data['list_produk'] = Produk::whereYear('created_at', '2022-08-21')->get;
        // $data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->whereNotIn('stok', [1])->whereYear('created_at', '2022')->get;
        $data['nama_produk'] = $nama;
        $data['stok'] = request('stok');


        return view('penjual.produk.index', $data);
    }
}
