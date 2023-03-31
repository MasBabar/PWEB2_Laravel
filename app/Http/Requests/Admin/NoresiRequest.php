<?php
/**
 * @author     Thank you for using Admiko.com
 * @copyright  2020-2022
 * @link       https://Admiko.com
 * @Help       We are always looking to improve our code. If you know better and more creative way don't hesitate to contact us. Thank you.
 */
namespace App\Http\Requests\Admin;
use Illuminate\Foundation\Http\FormRequest;
use Response;

class NoresiRequest extends FormRequest
{
    public function rules()
    {
        return [
            "no_resi"=>[
				"string",
				"nullable"
			],
			"nama_distributor"=>[
				"string",
				"nullable"
			],
			"kota_distributor"=>[
				"string",
				"nullable"
			],
			"jenis_barang"=>[
				"string",
				"nullable"
			],
			"kategori_pengguna"=>[
				"string",
				"nullable"
			]
        ];
    }
    public function attributes()
    {
        return [
            "no_resi"=>"No Resi",
			"nama_distributor"=>"Nama Distributor",
			"kota_distributor"=>"Kota Distributor",
			"jenis_barang"=>"Jenis Barang",
			"kategori_pengguna"=>"Kategori Pengguna"
        ];
    }
    
    public function authorize()
    {
        if (!auth("admin")->check()) {
            return false;
        }
        return true;
    }
}