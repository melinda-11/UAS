<?php 

namespace App\Http\Controllers;
use App\Models\Produk;

class ProdukController extends controller{
	function index(){
		
		$data['list_produk']= Produk::all();
		return view('produk.index', $data);
	}
	function create(){
		return view('produk.create');
	}
	function store(){
		$produk = new Produk;
		$produk->nama = request('nama');
		$produk->harga = request('harga');
		$produk->berat = request('berat');
		$produk->stok = request('stok');
		$produk->deskripsi = request('deskripsi');
		$produk->save();

		return redirect ('admin/produk')->with('success','Data Derhasil Ditambahkan');

	}
	function show(Produk $produk){
		$data['produk'] = $produk;
		return view('produk.show',$data);
	}
	function edit(Produk $produk){
		$data['produk'] = $produk;
		return view('produk.edit',$data);
	}

	function update(Produk $produk){
		$data->nama = request('nama');
		$data->harga = request('harga');
		$data->stok= request('stok');
		$data->berat= request('berat');
		$data->deskripsi= request('deskripsi');
		$produk->save();

		return redirect ('admin/produk')->with('success','Data Derhasil Diedit');

	}

	function destroy(Produk $produk){
		$produk->delete();
		return redirect ('admin/produk')->with('danger','Data Derhasil Dihapus');
	}
	function filter(){
		$nama = request('nama');		
		$data['list_produk'] = Produk::where('nama','like', "%$nama%")->get();
		$data['nama'] = $nama;
		return view('produk.index', $data);
	}
} 