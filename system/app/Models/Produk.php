<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;
use App\Models\Kategori;
use App\Models\Penjual;

class Produk extends Model
{

	protected $table = "produk";

	function Kategori()
	{
		return $this->belongsTo(Kategori::class, 'id_kategori');
	}

	function Penjual()
	{
		return $this->belongsTo(Penjual::class, 'id_penjual');
	}

	function getHargaStringAttribute(){
		return "Rp.".number_format($this->attributes['harga']);
	}

	function getTanggalProduksiAttribute(){
		$tanggal = $this->created_at;
		return strftime("%d %b %y", strtotime($this->created_at));
	}


}
