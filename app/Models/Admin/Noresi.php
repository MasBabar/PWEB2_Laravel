<?php
/**
 * @author     Thank you for using Admiko.com
 * @copyright  2020-2022
 * @link       https://Admiko.com
 * @Help       We are always looking to improve our code. If you know better and more creative way don't hesitate to contact us. Thank you.
 */
namespace App\Models\Admin;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Traits\Admin\AdmikoFileUploadTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Noresi extends Model
{
    use AdmikoFileUploadTrait,SoftDeletes;

    public $table = 'data_distribusi';
    
    
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
		"no_resi",
		"nama_distributor",
		"kota_distributor",
		"jenis_barang",
		"kategori_pengguna",
		"admiko_order",
    ];
    
}