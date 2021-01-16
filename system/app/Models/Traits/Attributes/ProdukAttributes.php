<?php

namespace App\Models\Traits\Attributes;

use Illuminate\Support\Str;


trait ProdukAttributes{

	function getHargaStringAttributes(){
		return "Rp.".number_format($this->attributes['harga']);

	}

	function dba_handlersUploadFoto()

	if(request()->hasilFile('foto')){
		$foto = request()->file('foto');
		$destination = "images/produk";
		$randomstr + Str::random(5);
		$filename = $this->id."_".time()."_".$randomstr.".".$foto->extension();
		$url = $foto->storeAS($destination, $filename);
		$this->foto = "app/".$url;
		$this->save();
	}
}

function handleDelete(){
	$foto = $this->foto;
	$path = public_path($foto);
	if(file_exists($path)){
		unlink($path);
	}
	return true;
}

}