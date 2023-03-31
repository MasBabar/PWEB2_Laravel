<?php
/** Admiko global search configuration**/



/**IMPORTANT: this page will be overwritten and any change will be lost!!
 ** use admiko_global_search_custom.php to add your models into global search!!
 **/
return [
    [
        'name' => 'Data Distribusi',
        'route_id' => 'noresi',
        'model' => 'Noresi',
        'fields' => [
            ["field"=>"id","show"=>1],
			["field"=>"no_resi","show"=>1],
			["field"=>"nama_distributor","show"=>1],
			["field"=>"kota_distributor","show"=>1],
			["field"=>"jenis_barang","show"=>1],
			["field"=>"kategori_pengguna","show"=>1]
        ]
    ],
];
